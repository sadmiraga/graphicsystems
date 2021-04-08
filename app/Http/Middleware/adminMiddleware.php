<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($user = Auth::user()) {
            if (Auth::user()->user_type == 'admin') {
                return $next($request);
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/login');
        }
    }
}
