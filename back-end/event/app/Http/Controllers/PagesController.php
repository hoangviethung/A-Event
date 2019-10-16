<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    function __construct()
    {
        // $users = users::all();

        if(Auth::check()){
            view()->share('nguoidung', Auth::user());
        }
    }
    public function getIndex(){
        return view('pages.body');
    }
    public function getSreach(){
        return view('pages.sreach');
    }
    public function getLogin(){
        
        return view('pages.login');
    }
    public function postLogin(Request $request){
        $this->validate($request, 
        [
            'email'=>'required',
            'password'=>'required|min:3|max:50',
        ]
        ,
        [
            'email.required'=>'Bạn chưa nhập email',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu phải lơn hơn 3 kí tự',
            'password.max'=>'Mật khẩu không quá 50 kí tự',
        ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('pages/body');
        } else{
            return redirect('pages/login')->with('thongbao', 'Đăng nhập không thành công !');
        }
    }
    public function getRegister(){
        return view('pages.register');
    }
    public function getDangxuat(){
        Auth::logout(); 
        return redirect('pages/body');
    }
}
