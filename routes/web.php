<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    // Prevent SSL
    if (Request::secure()) {
        return abort(404);
    }
    return view('home');
});


Route::name('view.')->group(function(){
    Route::get('compress', 'CompressPdfController@show')->name('compress');
    Route::get('cut', 'CutPdfController@show')->name('cut');
    Route::get('secure', 'SecurePdfController@show')->name('secure');
    Route::get('convert.xlsx', 'ConvertXslxPdfController@show')->name('convert.xlsx');
    Route::get('convert.docx', 'ConvertDocxPdfController@show')->name('convert.docx');
    Route::get('convert.to-docx', 'ConvertPdfDocxController@show')->name('convert.to-docx');
});

Route::name('core.')->group(function(){
    Route::post('compress', 'CompressPdfController@execute')->name('compress')->middleware('compress.validate.request');
    Route::post('cut', 'CutPdfController@execute')->name('cut')->middleware('cut.validate.request');
    Route::post('secure', 'SecurePdfController@execute')->name('secure')->middleware('secure.validate.request');
    Route::post('convert.xlsx', 'ConvertXslxPdfController@execute')->name('convert.xlsx');
    Route::post('convert.docx', 'ConvertDocxPdfController@execute')->name('convert.docx');
    Route::post('convert.to-docx', 'ConvertPdfDocxController@execute')->name('convert.to-docx');
});

Route::get('download/{file}/{filename}/{extension}', 'CompressPdfController@download')->name('download');

