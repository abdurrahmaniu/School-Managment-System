<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class loggedInUser
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
        if(session()->has('loginName') && (url('/') == $request->url() || url('signup') == $request->url())) {
            return back();
        }
        return $next($request);
    }
}
