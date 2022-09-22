<?php

namespace App\Http\Controllers\site;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

use setasign\Fpdi\Fpdi;
use Setasign\Fpdf\Fpdf;
use setasign\Fpdi\PdfReader;

use Illuminate\Support\Str;

class CompanyController extends Controller
{

    public  $pdf;
    public  $csv_data;

    public function __construct(){
        $this->pdf = new Fpdi();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::where(['user_id'=>auth()->user()->id])->paginate(config('site.pagination_records_per_page'));
        return view('site.company.index',['companies' => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        if(!user_has_company_credit()){
            return redirect()->route('company.credit.buy')->with(['warning' => "Please buy credits to create company."]);
        }

        $company = new Company;
        $company->name = $request->name ?? '';
        $this->save_update_company($request,$company);

        // @Reduce user company credit 
        $this->reduce_user_credit();

        return redirect()->route('company.index')->with('success','Company created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        dd($company);
        return view('site.company.show',['company'=>$company]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('site.company.edit',['company'=>$company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyRequest  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $this->save_update_company($request,$company);
        return redirect()->route('company.index')->with('success','Company updated successfully.');
    }   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->back()->with('success','Company deleted successfully.');
    }

    
    /**
     * 
     * Company buy credit page
     *
     */
    public function buy_credits(){
        return view('site.company.buy-credit');
    }

    /**
     * 
     * Company buy credit page
     *
     */
    public function reduce_user_credit(){

        $user = User::find(auth()->user()->id);
        $company_credit = $user->company_credit ?? 0;

        if($company_credit == "-1"){
            return;
        }

        $user->company_credit = ($company_credit - 1);
        $user->save();
    }


    /**
     * 
     * Save Update company
     *
     */
    public function save_update_company($request,$company){
        
        $company->user_id = auth()->user()->id;
        $company->cin = $request->cin ?? '';
        $company->registered_office = $request->registered_office ?? '';
        $company->registered_office_at = $request->registered_office_at ?? '';
        
        if( $request->file('director_one_sign') ){
            $company->director_one_sign =  $request->file('director_one_sign')->storeAs('company','director_one_sign.'.$request->file('director_one_sign')->extension());
        } 

        if( $request->file('director_two_sign') ){
            $company->director_two_sign = $request->file('director_two_sign')->storeAs('company','director_two_sign.'.$request->file('director_one_sign')->extension());
        }
        
        if( $request->file('company_stamp_image') ){
            $company->stamp = $request->file('company_stamp_image')->storeAs('company','company_stamp_image.'.$request->file('director_one_sign')->extension());
        }

        $company->save();
    }

    public function upload_pdf(Request $request){

        $request->validate([
            'csv_file' => ['required','mimes:csv,txt']
        ]);

        $file = $request->file('csv_file');
        $type = $file->getClientOriginalExtension();
        $real_path = $file->getRealPath();

        if ($type != 'csv') {
            return redirect()->back()->with(['warning' => 'Invalid file type']);
        }

        $this->csv_data = array_map('str_getcsv', file($real_path));

        // dd($this->csv_data);

        $file = $request->file('csv');

        $company_id = $request->route()->id ?? 0;

        $company = Company::findOrFail($company_id);

        $this->pdf->AddPage();      

        $template_path = public_path().'/pdf/share-certificate-pdf.pdf';

        $countPage = $this->pdf->setSourceFile($template_path);

        $tplIdx = $this->pdf->importPage(1,PdfReader\PageBoundaries::MEDIA_BOX);

        // use the imported page and place it at position 10,10 with a width of 100 mm
        $this->pdf->useTemplate($tplIdx, null, null,300,200, true);
        
        $this->pdf->SetFont("helvetica", "",10);
        $this->pdf->SetTextColor(0,0,0);

        $this->pdf_map_firm_name($company);
        $this->pdf_map_cin_number($company);
        $this->pdf_map_registered_office($company);
        $this->pdf_map_folio_number();
        $this->pdf_map_holder_name();
        $this->pdf_map_office_at($company);
        $this->pdf_map_auth_sign();
        $this->pdf_map_director_sign();

        $this->pdf->AddPage();
        $tplIdx = $this->pdf->importPage(2,PdfReader\PageBoundaries::MEDIA_BOX);
        $this->pdf->useTemplate($tplIdx, null, null,300,200, true);

        echo $this->pdf->Output();
        die();

    }

    public function csvToArray($filename = '', $delimiter = ','){
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return $data;
    }

    
}
