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
    return view('home');
});


Route::name('view.')->group(function(){
    Route::get('compress', 'CompressPdfController@show')->name('compress');
    Route::get('cut', 'CutPdfController@show')->name('cut');
    Route::get('secure', 'SecurePdfController@show')->name('secure');
});

Route::name('core.')->group(function(){
    Route::post('compress', 'CompressPdfController@execute')->name('compress');
    Route::post('cut', 'CutPdfController@execute')->name('cut');
    Route::post('secure', 'SecurePdfController@execute')->name('secure');
});
