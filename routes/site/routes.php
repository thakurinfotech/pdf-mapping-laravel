<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site\DashboardController;
use App\Http\Controllers\site\CompanyController;
use App\Http\Controllers\site\ShareHolderController;

Route::group(['prefix' => '/dashboard','middleware' => ['auth'] ], function () {
	Route::get('/',[DashboardController::class,'index'])->name('dashboard');

	Route::post('company/{id}/upload',[CompanyController::class,'upload_pdf'])->name('company.pdf.upload');
	Route::get('company/buy-credits',[CompanyController::class,'buy_credits'])->name('company.credit.buy');	
	Route::resource('company', CompanyController::class);

	Route::get('shareholder/csv-bulk-import',[ShareHolderController::class,'bulk_import_csv_page'])->name('shareholder.csv.bulk.import.page');
	Route::post('shareholder/csv-bulk-import',[ShareHolderController::class,'bulk_import_csv'])->name('shareholder.csv.bulk.import');
	
	Route::get('shareholder/map-csv',[ShareHolderController::class,'map_uploaded_csv'])->name('shareholder.mapcsv');
	Route::post('shareholder/map-csv',[ShareHolderController::class,'import_shareholders_mapped_csv'])->name('shareholder.mapcsv.import');
	
	Route::post('shareholder/switch-company',[ShareHolderController::class,'switch_company'])->name('shareholder.switch.company');
	
	Route::post('shareholder/add/to/export',[ShareHolderController::class,'add_to_export_queue'])->name('shareholder.add.to.export');

	Route::resource('shareholder',ShareHolderController::class);
});