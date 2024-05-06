<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LocalizationMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('lang')) {
            app()->setLocale(session('lang'));
        }else{
            app()->setLocale(config('app.locale'));
        }
        return $next($request);
    }
}
