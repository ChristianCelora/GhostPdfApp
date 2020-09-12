<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller{
    protected $name = "";
    protected $action_route = "";

    public function show(){
        return view(
            "upload_pdf", 
            ["name" => $this->name, "form_action" => $this->action_route]
        );
    }
}
