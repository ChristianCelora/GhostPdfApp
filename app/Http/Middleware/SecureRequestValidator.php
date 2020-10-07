<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SecureRequestValidator {
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
        }else if(!$request->has("password")){
            throw new Exception("No password is specified");
        }
        return $next($request);
    }
}
