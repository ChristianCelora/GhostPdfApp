<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CutRequestValidator {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){
        if(!$request->hasFile("file")){
            throw new Exception("No file has been uploaded");
        }else if(!$request->has("pages_from") || !$request->has("pages_to")){
            throw new Exception("No ranges are specified");
        }
        return $next($request);
    }
}
