<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CutPdfController extends PdfController {
    protected $name = "cut_pdf";
    protected $style_color = "orange";
    protected $action_route = "core.cut";
}
