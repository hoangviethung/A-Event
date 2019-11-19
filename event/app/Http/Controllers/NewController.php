<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function getDanhsach(){
        return view('admin.new.danhsach');
    }

    public function getThem(){
        return view('admin.new.them');
    }

    public function getSua(){
        return view('admin.new.sua');
    }
}
