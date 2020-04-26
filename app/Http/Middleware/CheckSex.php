<?php

namespace App\Http\Middleware;

use Closure;

class CheckSex
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
        print_r('sexsexsexsexsexsexsexsex');
        return $next($request);
    }
}
