<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DanhmucController extends Controller
{
    public function getDanhsach(){
        return view('admin.danhmuc.danhsach');
    }

    public function getSua(){
        return view('admin.danhmuc.sua');
    }
    
    public function getThem(){
        return view('admin.danhmuc.them');
    }
}
