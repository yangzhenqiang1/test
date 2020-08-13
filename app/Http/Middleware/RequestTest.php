<?php

namespace App\Http\Middleware;

use Closure;

class RequestTest
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
//        dump($request);
//        dump('1');
        return $next($request);
    }
}
