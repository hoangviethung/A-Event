<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;
class SliderController extends Controller
{
    public function getDanhsach(){
        return view('admin.slider.danhsach');
    }

    public function getSua(){
        return view('admin.slider.sua');
    }

    public function getThem(){
        return view('admin.slider.them');
    }
}
