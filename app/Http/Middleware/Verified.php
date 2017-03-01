<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Verified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->is_active) {
            return $next($request);
            
        }
        
           Auth::logout();
          return redirect('/login')->withInfo('Account not verified');       
    }
}
