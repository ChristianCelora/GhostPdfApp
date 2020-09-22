<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class PdfController extends Controller{
    protected $view_name = "";
    protected $name = "";
    protected $style_color = "";
    protected $action_route = "";
    /**
     * Display the view
     */
    public function show(){
        return view(
            $this->view_name, 
            [
                "name" => $this->name, 
                "form_action" => $this->action_route, 
                "color" => $this->style_color
            ]
        );
    }
    /**
     * Perform operation
     */
    public abstract function execute(Request $request);
}
