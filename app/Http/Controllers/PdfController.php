<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class PdfController extends Controller{
    const COMPRESSED_PREFIX = "c";
    /** @var string $view_name view code */
    protected $view_name = "";
    /** @var string $style_color view primary style color */
    protected $style_color = "";
    /** @var string $action_route form action route */
    protected $action_route = "";
    /**
     * Perform operation
     */
    public abstract function execute(Request $request);
    /**
     * Display the view
     */
    public function show(){
        return view(
            $this->view_name, 
            [
                "form_action" => $this->action_route, 
                "color" => $this->style_color
            ]
        );
    }
    /**
     * Download the file
     */
    public function download(string $file, string $filename){
        $headers = array("Content-Type" => "application/pdf");
        return response()->download("/tmp/$file.pdf", $filename, $headers);
    }
}
