<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class logCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //print_r($request->session()->get('logData'));
        if (empty($request->session()->get('logData'))) {
            return redirect('/login');
        }
        return $next($request);
    }
}
