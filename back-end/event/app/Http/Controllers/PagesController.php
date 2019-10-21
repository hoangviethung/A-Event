<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
use App\users;
=======
use App\Slide;
>>>>>>> d12c48ef7219dc9621ba0e165d60dafed943455d
class PagesController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        return view('pages.body',['slide'=>$slide ]);
    }
    public function getSreach(){
        return view('pages.sreach');
    }
    public function getLogin(){
<<<<<<< HEAD
        return view('pages.login');
    }
=======

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
>>>>>>> d12c48ef7219dc9621ba0e165d60dafed943455d
    public function getRegister(){
        return view('pages.register');
    }
    public function postRegister(Request $request){
    //     $this->validate($request,
    //     [
    //         'email'=>'required|min:3|max:32',
    //         'name'=>'required|min:3|max:32',
    //         'password'=>'required|min:3|max:32',
    //         'dien_thoai'=>'required|min:1|max:11',
    //         'dia_chi'=>'required|min:3|max:32',
    //         'ngay_sinh'=>'required',
    //         'gioi_tinh'=>'required',
    //         'hinh'=>'required',
    //         'vip'=>'required',
    //     ],
    //     [
    //         'email.required'=>'bạn chưa nhập email',
    //         'email.min'=>'email phải lớn hơn 3 kí tự',
    //         'email.max'=>'email không quá 32 kí tự',
            
    //         'name.required'=>'bạn chưa nhập tên',
    //         'name.min'=>'tên phải lơn hơn 3 kí tự',
    //         'name.max'=>'tên không quá 32 kí tự',

    //         'password.required'=>'bạn chưa nhập mật khẩu',
    //         'password.min'=>'mật khẩu phải lớn hơn 3 kí tự',
    //         'password.max'=>'mật khẩu không quá 32 kí tự',
            
    //         'dien_thoai.required'=>'bạn chưa nhập số điện thoại',
    //         'dien_thoai.min'=>'số điện thoại phải lớn hơn 1 kí tự',
    //         'dien_thoai.max'=>'số điện thoại không quá 11 kí tự',

    //         'dia_chi.required'=>'bạn chưa nhập địa chỉ',
    //         'dia_chi.min'=>'địa chỉ phải lớn hơn 3 kí tự',
    //         'dia_chi.max'=>'địa chỉ không quá 32 kí tự',

    //         'ngay_sinh.required'=>'bạn chưa nhập ngày sinh',

    //         'gioi_tinh.required'=>'bạn chưa chọn giới tính',

    //         'hinh.required'=>'bạn chưa chọn hình',

    //         'vip.required'=>'bạn chưa nhập chọn khách hàng',
    //     ]
    // );
    $user = new users;
    $user->email = $request->email;
    $user->name = $request->name;
    $user->password = bcrypt($request->password);
    $user->dien_thoai = $request->dien_thoai;
    $user->dia_chi = $request->dia_chi;
    $user->ngay_sinh = $request->ngay_sinh;
    $user->gioi_tinh = $request->gioi_tinh;
    $user->hinh = $request->hinh;
    $user->vip = $request->vip;
    $user->save();
    return view('pages/register')->with('thongbao', 'Đăng kí thành công !');
    }   

    public function getDangxuat(){
        Auth::logout();
<<<<<<< HEAD
        return redirect('pages.body');
=======
        return redirect('pages/body');
>>>>>>> d12c48ef7219dc9621ba0e165d60dafed943455d
    }




}
