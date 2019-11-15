<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeenmailController extends Controller
{
    public function getThongbao(){
        return view('admin.thongbao.seenmail');
    }
}
