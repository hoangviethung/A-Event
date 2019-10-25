<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\admin;
class UserController extends Controller
{
    public function getDanhsach(){
        $user = users::all();
        return view('admin.user.danhsach', ['user'=>$user]);
    }
    
    public function getThem(){
        return view('admin.user.them');
    }

    public function postThem(Request $request){
        $this->validate($request, 
        [

        ],
        [

        ]);
    }

    public function getSua(){
        return view('admin.user.sua');
    }

    public function postSua(){
        
    }
    





}
