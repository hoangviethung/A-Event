<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeenmailController extends Controller
{
    public function getDanhsach(){
        return view('admin.thongbao.danhsach');
    }

    public function getThongbao(){
        return view('admin.thongbao.seenmail');
    }
}
