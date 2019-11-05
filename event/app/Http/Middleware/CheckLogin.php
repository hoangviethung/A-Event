<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckLogin
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
<<<<<<< HEAD
        if(Auth::guard($guard)->check()){
            if(Auth::user()->type == 2){
                return $next($request);
            }
            return redirect('admin/login')->with('thongbao','Bạn không có quyền truy cập !');
          
        }
        return redirect('admin/login');
=======
        return $next($request);
        // , $guard = null
        // if(Auth::guard($guard)->check()){
        //     if(Auth::user()->type == 2){
        //         return $next($request);
        //     }
        //     return redirect('admin/login')->with('thongbao','Bạn không có quyền truy cập !');

        // }
        // return redirect('pages/login');
>>>>>>> 496d533a83de446ff3e394adc6d01992de4c655d
    }
}
