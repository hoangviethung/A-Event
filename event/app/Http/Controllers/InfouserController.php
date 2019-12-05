<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events;
use App\users;
use Illuminate\Support\Facades\Auth;


class InfouserController extends Controller
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

    public function getEventcreate(){
        $users = users::all();
        $create_event = Events::paginate(4);
        return view('pages/eventcreate',['eventcreate'=>$create_event,'user'=>$users]);
    }

    public function postEventcreate(){

    }

    public function getSua($id){
        $create_event = Events::find($id);
        return view('pages.addevent',['danhmuc'=>$create_event]);
    }

    public function postSua(Request $request,$id){
        $event = Events::find($id);
    }

    public function getXoa($id){
        $create_event = Events::find($id);
        $create_event->delete();
        return redirect('pages/eventcreate');
    }
}
