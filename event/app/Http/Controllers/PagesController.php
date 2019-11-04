<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\users;
use App\Slide;
use App\Events;
use App\Rules\Captcha;
use App\News;
use App\Type_events;
class PagesController extends Controller
{
    function __construct()
    {
        if(Auth::check()){
            view()->share('user', Auth::user());
        }
    }
    public function getIndex(){
        $slide = Events::where('hien_thi_slider',1)->get();
        $giaitri = Events::where('id_loai',1)->get();
        $kienthuc = Events::where('id_loai',2)->get();
        $sukienkhac = Events::where('id_loai',3)->get();
        $new_01= News::get();
        return view('pages.body',compact('slide','giaitri','kienthuc','new_01','sukienkhac'));
    }
    public function getAddevent(){
        return view('pages.addevent');
    }
    public function getSearch(){
        return view('pages.search');
    }
    public function postSearch(Request $request){
        $tukhoa = $request->tukhoa;
        $event = Events::where('ten_su_kien','like',"%$tukhoa%")->orWhere('dia_chi','like',"%$tukhoa%")->orWhere('tom_tat','like',"%$tukhoa%")->take(12)->get();
        return view('pages.search',['event'=>$event,'tukhoa'=>$tukhoa,'sreach'=>$event]);
    }
    public function getLogin(){
        return view('pages.login');
    }
    public function getChitiet(Request $req){
        $chitiet = Events::where('id',$req->id)->first();
        return view('pages.chitiet',compact('chitiet'));
    }

    public function postLogin(Request $request){
        $this->validate($request, 
        [
            'email'=>'required|min:3|max:32',
            'password'=>'required|min:3|max:32',
        ],
        [
            'email.required'=>'bạn chưa nhập email',
            'email.min'=>'email phải lớn hơn 3 kí tự',
            'email.max'=>'email không quá 32 kí tự',

            'password.required'=>'bạn chưa nhập mật khẩu',
            'password.min'=>'mật khẩu phải lớn hơn 3 kí tự',
            'password.max'=>'mật khẩu không quá 32 kí tự',
        ]);
        $arr = ['email' => $request->email, 'password' =>$request->password];
        if(Auth::attempt($arr)){
           return redirect('pages/index');
        }else{
            return redirect('pages/login')->with('thongbao', 'Tài khoản hoặc mật khẩu không chính xác !');
        }
    }

    public function getRegister(){
        return view('pages.register');
    }
    public function postRegister(Request $request){
        $this->validate($request,
        [
            'email'=>'required|min:3|max:32',
            'name'=>'required|min:3|max:32',
            'password'=>'required|min:3|max:32',
            'dien_thoai'=>'required|min:1|max:11',
            'dia_chi'=>'required|min:3|max:32',
            'ngay_sinh'=>'required',
            'gioi_tinh'=>'required',
            'hinh'=>'required',
            'vip'=>'required',
            'g-recaptcha-response'=> new Captcha(),
        ],
        [
            'email.required'=>'bạn chưa nhập email',
            'email.min'=>'email phải lớn hơn 3 kí tự',
            'email.max'=>'email không quá 32 kí tự',

            'name.required'=>'bạn chưa nhập tên',
            'name.min'=>'tên phải lơn hơn 3 kí tự',
            'name.max'=>'tên không quá 32 kí tự',

            'password.required'=>'bạn chưa nhập mật khẩu',
            'password.min'=>'mật khẩu phải lớn hơn 3 kí tự',
            'password.max'=>'mật khẩu không quá 32 kí tự',

            'dien_thoai.required'=>'bạn chưa nhập số điện thoại',
            'dien_thoai.min'=>'số điện thoại phải lớn hơn 1 kí tự',
            'dien_thoai.max'=>'số điện thoại không quá 11 kí tự',

            'dia_chi.required'=>'bạn chưa nhập địa chỉ',
            'dia_chi.min'=>'địa chỉ phải lớn hơn 3 kí tự',
            'dia_chi.max'=>'địa chỉ không quá 32 kí tự',

            'ngay_sinh.required'=>'bạn chưa nhập ngày sinh',

            'gioi_tinh.required'=>'bạn chưa chọn giới tính',

            'hinh.required'=>'bạn chưa chọn hình',

            'vip.required'=>'bạn chưa nhập chọn khách hàng',
        ]
    );
    $user = new users;
    $user->email = $request->email;
    $user->name = $request->name;
    $user->password = bcrypt($request->password);
    $user->dien_thoai = $request->dien_thoai;
    $user->dia_chi = $request->dia_chi;
    $user->ngay_sinh = $request->ngay_sinh;
    $user->gioi_tinh = $request->gioi_tinh;
    if($request->hasFile('hinh')){
        $file = $request->file('hinh');
        if($file->getClientOriginalExtension() == 'png' || 'jpg' || 'jpeg' || 'gif'){
            $filename = md5(time()).'_'.$file->getClientOriginalName();
            $upload =  $file->move('images/user',$filename);
            $link = $filename;
            $user->hinh = $link;
        }
    }else{
        $user->hinh= '';
    }
    $user->vip = $request->vip;
    $user->save();
        return redirect('pages/login')->with('thongbao', 'Đăng kí thành công bạn vui lòng đăng nhập !');
    }

    public function getDangxuat(){
        Auth::logout();
        return redirect('pages/index');

    }
// QL User
    public function getDanhsach(){
        $user = users::all();
        return view('admin/user/danhsach',['user'=>$user]);
    }
    public function getThem(){
        return view('admin/user/them');
    }
    public function postThem(Request $request){
        $this->validate($request,
        [
            'email'=>'required|min:3|max:32',
            'name'=>'required|min:3|max:32',
            'password'=>'required|min:3|max:32',
            'dien_thoai'=>'required|min:1|max:11',
            'dia_chi'=>'required|min:3|max:32',
            'ngay_sinh'=>'required',
            'gioi_tinh'=>'required',
            'hinh'=>'required',
            'vip'=>'required',
        ],
        [
            'email.required'=>'bạn chưa nhập email',
            'email.min'=>'email phải lớn hơn 3 kí tự',
            'email.max'=>'email không quá 32 kí tự',

            'name.required'=>'bạn chưa nhập tên',
            'name.min'=>'tên phải lơn hơn 3 kí tự',
            'name.max'=>'tên không quá 32 kí tự',

            'password.required'=>'bạn chưa nhập mật khẩu',
            'password.min'=>'mật khẩu phải lớn hơn 3 kí tự',
            'password.max'=>'mật khẩu không quá 32 kí tự',

            'dien_thoai.required'=>'bạn chưa nhập số điện thoại',
            'dien_thoai.min'=>'số điện thoại phải lớn hơn 1 kí tự',
            'dien_thoai.max'=>'số điện thoại không quá 11 kí tự',

            'dia_chi.required'=>'bạn chưa nhập địa chỉ',
            'dia_chi.min'=>'địa chỉ phải lớn hơn 3 kí tự',
            'dia_chi.max'=>'địa chỉ không quá 32 kí tự',

            'ngay_sinh.required'=>'bạn chưa nhập ngày sinh',

            'gioi_tinh.required'=>'bạn chưa chọn giới tính',

            'hinh.required'=>'bạn chưa chọn hình',

            'vip.required'=>'bạn chưa nhập chọn khách hàng',
        ]);
        $user = new users;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->dien_thoai = $request->dien_thoai;
        $user->dia_chi = $request->dia_chi;
        $user->ngay_sinh = $request->ngay_sinh;
        $user->gioi_tinh = $request->gioi_tinh;
        if($request->hasFile('hinh')){
            $file = $request->file('hinh');
            if($file->getClientOriginalExtension() == 'png' || 'jpg' || 'jpeg' || 'gif'){
                $filename = md5(time()).'_'.$file->getClientOriginalName();
                $file->move('images/user',$filename);
                $link = $filename;
                $user->hinh = $link;
            }
        }else{
            $user->hinh= '';
        }
        $user->vip = $request->vip;
        $user->save();
        return redirect('admin/user/them')->with('thongbao', 'Đăng kí Accounts thành công !');
    }
    public function getSua($id){
        $user = users::find($id);
        return view('admin/user/sua',['user'=>$user]);
    }

    public function postSua(Request $request, $id){
        $user = users::find($id);
        $this->validate($request,
        [
            'email'=>'required|min:3|max:32',
            'name'=>'required|min:3|max:32',
            'password'=>'required|min:3|max:32',
            'dien_thoai'=>'required|min:1|max:11',
            'dia_chi'=>'required|min:3|max:32',
            'ngay_sinh'=>'required',
            'gioi_tinh'=>'required',
            'hinh'=>'required',
            'vip'=>'required',
        ],
        [
            'email.required'=>'bạn chưa nhập email',
            'email.min'=>'email phải lớn hơn 3 kí tự',
            'email.max'=>'email không quá 32 kí tự',

            'name.required'=>'bạn chưa nhập tên',
            'name.min'=>'tên phải lơn hơn 3 kí tự',
            'name.max'=>'tên không quá 32 kí tự',

            'password.required'=>'bạn chưa nhập mật khẩu',
            'password.min'=>'mật khẩu phải lớn hơn 3 kí tự',
            'password.max'=>'mật khẩu không quá 32 kí tự',

            'dien_thoai.required'=>'bạn chưa nhập số điện thoại',
            'dien_thoai.min'=>'số điện thoại phải lớn hơn 1 kí tự',
            'dien_thoai.max'=>'số điện thoại không quá 11 kí tự',

            'dia_chi.required'=>'bạn chưa nhập địa chỉ',
            'dia_chi.min'=>'địa chỉ phải lớn hơn 3 kí tự',
            'dia_chi.max'=>'địa chỉ không quá 32 kí tự',

            'ngay_sinh.required'=>'bạn chưa nhập ngày sinh',

            'gioi_tinh.required'=>'bạn chưa chọn giới tính',

            'hinh.required'=>'bạn chưa chọn hình',

            'vip.required'=>'bạn chưa nhập chọn khách hàng',
        ]);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->dien_thoai = $request->dien_thoai;
        $user->dia_chi = $request->dia_chi;
        $user->ngay_sinh = $request->ngay_sinh;
        $user->gioi_tinh = $request->gioi_tinh;
        if($request->hasFile('hinh')){
            $file = $request->file('hinh');
            if($file->getClientOriginalExtension() == 'png' || 'jpg' || 'jpeg' || 'gif'){
                $filename = md5(time()).'_'.$file->getClientOriginalName();
                $file->move(public_path('images/user'), $filename);
                $link = $filename;
                $user->hinh = $link;
            }
        }else{
            $user->hinh= '';
        }
        $user->vip = $request->vip;
        $user->save();
        return redirect('admin/user/sua/'.$user->id)->with('thongbao', 'Sửa Accounts thành công !');
    }

    public function getXoa($id){
        $user = users::find($id);
        $user->delete();
        return redirect('admin/user/danhsach')->with('thongbao','Bạn đã xóa Accounts thành công !');
    }

    public function getLoginAdmin(){
        return view('admin/login');
    }

    public function postLoginAdmin(Request $request){
        $arr = ['email' => $request->email, 'password' =>$request->password];
        if(Auth::attempt($arr)){
           return redirect('admin/login');
        }else{
            return redirect('admin/event/danhsach')->with('thongbao', 'Đăng nhập thành công !');
        }
    }
    // QL User
    
}
