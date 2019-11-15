<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function getBookingone(){
        return view('pages.bookingone');
    }

    public function getBookingtwo(){
        return view('pages.bookingtwo');
    }
}
