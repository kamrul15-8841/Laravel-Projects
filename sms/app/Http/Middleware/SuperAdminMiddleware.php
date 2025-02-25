<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Auth;

class SuperAdminMiddleware
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
        if (Auth::user()->id == 11)
        {
            return $next($request);
        }
        else
        {
            return redirect('/dashboard')->with('message', 'Access Denied');
        }

    }
}
