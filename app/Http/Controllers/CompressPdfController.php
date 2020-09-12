<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompressPdfController extends PdfController {
    protected $name = "compress_pdf";
    protected $style_color = "red";
    protected $action_route = "core.compress";
}
