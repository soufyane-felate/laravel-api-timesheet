<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimeRecordController;
use App\Http\Controllers\InvoiceController;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\TimeRecordsExport;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/price/hello' , function(){
    return 'price';
});

Route::post('/time_records', [TimeRecordController::class ,'store']);
Route::get('/time_show', [TimeRecordController::class ,'show']);
Route::delete('/time_delete/{id}', [TimeRecordController::class ,'destroy']);
Route::get('/export', [TimeRecordController::class ,'export']);
Route::post('/invoices', [InvoiceController::class, 'store']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
