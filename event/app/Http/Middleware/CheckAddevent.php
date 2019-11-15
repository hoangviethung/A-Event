<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckAddevent
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
        if(Auth::guard($guard)->check()){
            if(Auth::user()->type == 1){
                return $next($request);  
            }
            return redirect('pages/login');
        }
        return redirect('pages/login');
    }
}
