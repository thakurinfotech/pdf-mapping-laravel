<?php

namespace App\Http\Controllers\site;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ShareHolder;
use App\Http\Requests\StoreShareHolderRequest;
use App\Http\Requests\UpdateShareHolderRequest;
use App\Models\Company;
use App\Models\ShareHolderImportLog;
use Illuminate\Support\Facades\Storage;


use setasign\Fpdi\Fpdi;
use Setasign\Fpdf\Fpdf;
use setasign\Fpdi\PdfReader;
use Illuminate\Support\Str;

use App\Models\ShareCertBulkDownload;

use File;
use ZipArchive;

use App\Models\Notification;

class ShareHolderController extends Controller
{

    public  $pdf;
    public  $pdf_data;

    public function __construct(){
        $this->pdf = new Fpdi();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $companies = Company::where(['user_id' => auth()->user()->id ])->orderBy('id','DESC')->get();
        // @load session with first company id if not there.
        $shareholder_company_id = $request->session()->get('shareholder_company_id');
        if( !$shareholder_company_id ){
            if( $companies->first() ){
                $request->session()->put('shareholder_company_id',$companies->first()->id);
                $shareholder_company_id = $companies->first()->id;
            }
        }  

        $share_holders = ShareHolder::where(['company_id' => $shareholder_company_id ])->paginate(config('site.shareholders_pagination_per_page'));

        return view('site.shareholders.index',[
            'companies' => $companies,
            'shareholder_company_id' => $shareholder_company_id,
            'share_holders' => $share_holders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::where(['user_id' => auth()->user()->id ])->orderBy('id','DESC')->get();
        return view('site.shareholders.create',['companies'=>$companies]);
    }

    public function bulk_import_csv_page()
    {
        $companies = Company::where(['user_id' => auth()->user()->id ])->orderBy('id','DESC')->get();
        return view('site.shareholders.csv-upload-import',['companies'=>$companies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShareHolderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShareHolderRequest $request)
    {
        dd('binog');
    }

    public function bulk_import_csv(StoreShareHolderRequest $request)
    {
        $company_id = $request->company ?? 0;
        $csv_path = $request->file('csv_file')->storeAs('csv',time().'-'.$company_id.'-csv.'.$request->file('csv_file')->extension());

        $log = new ShareHolderImportLog;
        $log->user_id = auth()->user()->id;
        $log->company_id = $company_id;
        $log->csv_path = $csv_path;
        $log->save();

        $request->session()->put('share_holder_import_log_id',$log->id);

        return redirect()->route('shareholder.mapcsv')->with(['success' => 'Csv uploaded successfuly. Please map cloumns to start import.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShareHolder  $shareHolder
     * @return \Illuminate\Http\Response
     */
    public function show(ShareHolder $shareHolder,Request $request)
    {
        $shareHolder = ShareHolder::findOrFail($request->route('shareholder'));

        $this->pdf_data['company'] = Company::findOrFail($shareHolder->company_id);
        $this->pdf_data['shareholder'] = $shareHolder;

        $this->pdf->AddPage();      

        $template_path = public_path().'/pdf/share-certificate-pdf.pdf';

        $countPage = $this->pdf->setSourceFile($template_path);

        $tplIdx = $this->pdf->importPage(1,PdfReader\PageBoundaries::MEDIA_BOX);

        // use the imported page and place it at position 10,10 with a width of 100 mm
        $this->pdf->useTemplate($tplIdx, null, null,300,200, true);
        
        $this->pdf->SetFont("helvetica", "",10);
        $this->pdf->SetTextColor(0,0,0);

        $this->pdf_map_firm_name();
        $this->pdf_map_cin_number();
        $this->pdf_map_registered_office();
        $this->pdf_map_folio_number();
        $this->pdf_map_holder_name();
        $this->pdf_map_office_at();
        $this->pdf_map_auth_sign();
        $this->pdf_map_director_sign();

        $this->pdf->AddPage();
        $tplIdx = $this->pdf->importPage(2,PdfReader\PageBoundaries::MEDIA_BOX);
        $this->pdf->useTemplate($tplIdx, null, null,300,200, true);

        echo $this->pdf->Output();
        die();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShareHolder  $shareHolder
     * @return \Illuminate\Http\Response
     */
    public function edit(ShareHolder $shareHolder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShareHolderRequest  $request
     * @param  \App\Models\ShareHolder  $shareHolder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShareHolderRequest $request, ShareHolder $shareHolder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShareHolder  $shareHolder
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShareHolder $shareHolder)
    {
        //
    }

    public function switch_company(Request $request){
        $shareholder_company_id = $request->shareholder_company_id ?? 0;
        $request->session()->put('shareholder_company_id',$shareholder_company_id);
        return response()->json(['msg' =>'Company updated successfully'], 200);
    }

    public function map_uploaded_csv(Request $request){
        $share_holder_import_log_id = $request->session()->get('share_holder_import_log_id') ?? 0;  
        $import_log = ShareHolderImportLog::findOrFail($share_holder_import_log_id);
        $csv_path = Storage::path($import_log->csv_path);

        $csv_headers = $this->csvToArray($csv_path,',',true);
        
        $fields = ['folio_number','share_holder_name','no_of_shares_held','amount','no_of_shares_held_from','no_of_shares_held_to','subscription_allotment_date'];

        return view('site.shareholders.mapcsv',[
            'import_log'=>$import_log,
            'csv_headers' => $csv_headers,
            'fields' => $fields
        ]);
    }

    public function csvToArray($filename = '', $delimiter = ',',$header_only=false){
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
                    if( $header_only ){
                        return $header;
                    }
                else
                    $data[] = $row;
            }
            fclose($handle);
        }

        return $data;
    }

    public function import_shareholders_mapped_csv(Request $request){

        $share_holder_import_log_id = $request->session()->get('share_holder_import_log_id') ?? 0;  
        $import_log = ShareHolderImportLog::findOrFail($share_holder_import_log_id);
        $csv_path = Storage::path($import_log->csv_path);

        $csv_rows = $this->csvToArray($csv_path,',');

        
        $insert_data = [];

        foreach($csv_rows as $key=>$csv_row){
            if($key>0){
                $insert_data[] = [
                    'company_id' => $import_log->company_id,
                    'folio_number' => $csv_row[$request->folio_number],
                    'share_holder_name' => $csv_row[$request->share_holder_name],
                    'no_of_shares_held' => (int)$csv_row[$request->no_of_shares_held],
                    'amount' => (int)$csv_row[$request->amount],
                    'no_of_shares_held_from' => (int)$csv_row[$request->no_of_shares_held_from],
                    'no_of_shares_held_to' => (int)$csv_row[$request->no_of_shares_held_to],
                    'subscription_allotment_date' => $csv_row[$request->subscription_allotment_date],
                ];
            }
        }

        $chunks = array_chunk($insert_data, 1000);
        foreach($chunks as $chunk){
            ShareHolder::insert($chunk);
        }

        $import_log->csv_mapped = 1;
        $import_log->save();

        $request->session()->put('shareholder_company_id',$import_log->company_id);

        return redirect()->route('shareholder.index')->with(['success'=>'Shareholders imported successfuly']);

    }

    public function pdf_map_firm_name(){
        $this->pdf->SetFont("helvetica","B",25);
        $this->pdf->SetTextColor(0,0,0);
        $this->pdf->Text('60','32',$this->pdf_data['company']->name ?? '');
    }

    public function pdf_map_cin_number(){
        $this->pdf->SetFont("helvetica","B",10);
        $this->pdf->SetTextColor(0,0,0);
        $this->pdf->Text('125','38',$this->pdf_data['company']->cin ?? '');
    }

    public function pdf_map_registered_office(){
        $this->pdf->SetFont("helvetica","B",10);
        $this->pdf->SetTextColor(0,0,0);
        $this->pdf->Text('71','51',$this->pdf_data['company']->registered_office ?? '');
    }

    public function pdf_map_folio_number(){

        $folio_no = $this->pdf_data['shareholder']->folio_number ?? 0;
        $folio_no = str_pad($folio_no, 2, '0', STR_PAD_LEFT);
        $this->pdf->SetFont("helvetica","B",11);
        $this->pdf->SetTextColor(0,0,0);
        $this->pdf->Text('85','93',$folio_no);
    }

    public function pdf_map_holder_name(){
        $this->pdf->SetFont("helvetica","",12);
        $this->pdf->SetTextColor(0,0,0);
        $this->pdf->Text('90','106.5',$this->pdf_data['shareholder']->share_holder_name ?? '');

        $no_of_shares =  $this->pdf_data['shareholder']->no_of_shares_held ?? '';
        $inWords = new \NumberFormatter('en', \NumberFormatter::SPELLOUT);
        $this->pdf->Text('90','120.5',$no_of_shares.' SHARES'.' ('.strtoupper($inWords->format($no_of_shares)).')');

        $from_no_of_shares =  $this->pdf_data['shareholder']->no_of_shares_held_from ?? '';
        $to_no_of_shares =  $this->pdf_data['shareholder']->no_of_shares_held_to ?? '';
        $this->pdf->Text('90','136',str_pad($from_no_of_shares, 2, '0', STR_PAD_LEFT).' - '.$to_no_of_shares);
    }

    public function pdf_map_office_at(){
        $this->pdf->SetFont("helvetica","B",10);
        $this->pdf->SetTextColor(0,0,0);
        $this->pdf->Text('128','149.5',$this->pdf_data['company']->registered_office_at ?? '');
    }

    public function pdf_map_auth_sign(){
        $stamp = Storage::path($this->pdf_data['company']->stamp ?? '');
        $this->pdf->Image($stamp,'100','160');
    }

    public function pdf_map_director_sign(){
        $director_one_sign = Storage::path($this->pdf_data['company']->director_one_sign ?? '');
        $this->pdf->Image($director_one_sign,'152','160');

        $director_two_sign = Storage::path($this->pdf_data['company']->director_two_sign ?? '');
        $this->pdf->Image($director_two_sign,'232','160');
    }

    public function add_to_export_queue(Request $request){        
        $bulk_share_holder_ids = $request->bulk_share_holder_ids ?? [];    

        $export_log = new ShareCertBulkDownload;
        $export_log->user_id  = auth()->user()->id;
        $export_log->shareholders = json_encode($bulk_share_holder_ids);
        $export_log->save();

        return response()->json(['msg' =>'Added to queue'], 200);
    }

    public function process_bulk_cert_downloads(){
        $downloads = ShareCertBulkDownload::where(['is_processed' => 0])->get();
        foreach($downloads as $download){
            $user_id = $download->user_id; 
            $shareholders =  json_decode($download->shareholders);
            foreach($shareholders as $shareholder_id){
                $shareholder = ShareHolder::find($shareholder_id);
                if($shareholder){
                    $this->make_shareholder_pdf_to_download_id($shareholder,$download->id);                    
                }
            }
            $this->make_shareholder_pdf_zip_to_download_id($download->id,'abc');
            $download->is_processed = 1;
            $download->download_link = Storage::url('bulk_cert_downloads/'.$download->id.'/zip/cert.zip');
            $download->save();

            $Notification =  new Notification;
            $Notification->user_id = $download->user_id;
            $Notification->notification = 'Certificate zip file is ready click to download.';
            $Notification->notification_link = Storage::url('bulk_cert_downloads/'.$download->id.'/zip/cert.zip');
            $Notification->save();

        }
    }

    public function make_shareholder_pdf_to_download_id($shareholder,$download_id){

        $this->pdf_data['company'] = Company::findOrFail($shareholder->company_id);
        $this->pdf_data['shareholder'] = $shareholder;

        $this->pdf = new Fpdi();

        $this->pdf->AddPage();      

        $template_path = public_path().'/pdf/share-certificate-pdf.pdf';

        $countPage = $this->pdf->setSourceFile($template_path);

        $tplIdx = $this->pdf->importPage(1,PdfReader\PageBoundaries::MEDIA_BOX);

        // use the imported page and place it at position 10,10 with a width of 100 mm
        $this->pdf->useTemplate($tplIdx, null, null,300,200, true);
        
        $this->pdf->SetFont("helvetica", "",10);
        $this->pdf->SetTextColor(0,0,0);

        $this->pdf_map_firm_name();
        $this->pdf_map_cin_number();
        $this->pdf_map_registered_office();
        $this->pdf_map_folio_number();
        $this->pdf_map_holder_name();
        $this->pdf_map_office_at();
        $this->pdf_map_auth_sign();
        $this->pdf_map_director_sign();

        $this->pdf->AddPage();
        $tplIdx = $this->pdf->importPage(2,PdfReader\PageBoundaries::MEDIA_BOX);
        $this->pdf->useTemplate($tplIdx, null, null,300,200, true);
   
        Storage::put('bulk_cert_downloads/'.$download_id.'/pdf/info.txt','This is system generated file.');
        $file_path = Storage::path('bulk_cert_downloads/'.$download_id.'/pdf/'.Str::slug($shareholder->share_holder_name).'-'.$shareholder->id.'.pdf');
        $this->pdf->Output($file_path,'F');


    }

    public function make_shareholder_pdf_zip_to_download_id($download_id,$company_name){  

        Storage::put('bulk_cert_downloads/'.$download_id.'/zip/info.txt','This is system generated file.');

        $zip = new ZipArchive;        
        
        $zip_path = Storage::path('bulk_cert_downloads/'.$download_id.'/zip/cert.zip');
        $files_path = Storage::path('bulk_cert_downloads/'.$download_id.'/pdf');

        if ($zip->open($zip_path, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE){

            $files = File::files($files_path);

            foreach ($files as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }            

            $zip->close();
        }

    }

}