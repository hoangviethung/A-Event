<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddeventController extends Controller
{
    public function getAddevent(){
        return view('pages.addevent');
    }
}
