<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bills;
use App\Events;
class BookingController extends Controller
{
    function __construct()
    {
        $this->middleware(function ($request, $next) {
             if($request->cookie('loginfb'))
            view()->share('loginfb',json_decode($request->cookie('loginfb')));
            return $next($request);
        });
        $this->middleware(function ($request, $next) {
             if($request->cookie('logingg'))
            view()->share('logingg',json_decode($request->cookie('logingg')));
            return $next($request);
        });
    }
    public function getBookingone(Request $req){
        $bookingone = Events::where('id',$req->id)->first();
        return view('pages.bookingone',compact('bookingone'));
    }
    public function getBookingtwo(Request $req){
        // print_r( $req->quantity1);
        // exit;
        $bookingtwo = Events::where('id',$req->id)->first();
        return view('pages.bookingtwo',compact('bookingtwo'));
    }
    public function postBookingtwo(Request $req){
        $bookingtwo = Events::where('id',$req->id)->first();
        return view('pages.bookingtwo',['bookingtwo'=>$bookingtwo,'quantity1'=>$req->quantity1,'quantity2'=>$req->quantity2,'tong_tien_thuong'=>$req->tong_tien_thuong,'tong_tien_vip'=>$req->tong_tien_vip,'tong_cong'=>$req->tong_cong]);
    }
}
