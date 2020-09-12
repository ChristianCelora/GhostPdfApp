<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompressPdfController extends PdfController {
    protected $name = "compress_pdf";
    protected $action_route = "core.compress";
}
