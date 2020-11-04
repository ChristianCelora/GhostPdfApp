<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

abstract class ConverterPdfController extends PdfController {
    public function execute(Request $request){
        Log::debug($request);
    }
}