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
    Route::get('v_compress', 'CompressPdfController@show')->name('v_compress');
    Route::get('v_cut', 'CutPdfController@show')->name('v_cut');
    Route::get('v_secure', 'SecurePdfController@show')->name('v_secure');
});

Route::name('core.')->group(function(){
    Route::get('compress', 'CompressPdfController@execute')->name('compress');
    Route::get('cut', 'CutPdfController@execute')->name('cut');
    Route::get('secure', 'SecurePdfController@execute')->name('secure');
});
