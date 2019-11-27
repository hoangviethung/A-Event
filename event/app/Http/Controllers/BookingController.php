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
    public function getBookingone(){
        return view('pages.bookingone');
    }
    public function postBookingone(Request $req){
        $bills = new Bills;
        $bill->id_event = $req->id_event;
        $bill->ten_nguoi_mua = $req->ten_nguoi_mua;
        $bill->phone = $req->phone;
        $bill->email = $req->email;
        $bill->ngay_mua = $req->ngay_mua;
        $bill->tong_tien = $req->tong_tien;
        $bill->save();

        $event = new Events;

    }


    public function getBookingtwo(){
        return view('pages.bookingtwo');
    }
}
