<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller{
    protected $name = "";

    public function show(){
        return view("upload_pdf", ["name" => $this->name]);
    }
}
