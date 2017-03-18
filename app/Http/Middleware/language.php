<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check if the first segment matches a language code
       if (Session::has('locale')){
           App::setLocale(session('locale'));
       }else{
           App::setLocale(config('app.fallback_locale'));
       }
        
        return $next($request);
    }
}
