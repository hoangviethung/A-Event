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
use Carbon\Carbon;
use Facebook\Facebook;
use Socialite;
use Illuminate\Support\Facades\Cookie;


class PagesController extends Controller
{
    function __construct()
    {
     
        if(Auth::check()){
            view()->share('user', Auth::user());
        }
        $this->middleware(function ($request, $next) {
             if($request->cookie('loginfb'))
            view()->share('loginfb',json_decode($request->cookie('loginfb')));
            return $next($request);
        });
    }
    public function getIndex(){
        $slide = Events::where([['hien_thi_slider',1],['duyet',1],])->orderBy('id','desc')->get();
        $giaitri = Events::where([['id_loai',1],['duyet',1],])->orderBy('id','desc')->get();
        $kienthuc = Events::where([['id_loai',2],['duyet',1],])->orderBy('id','desc')->get();
        $sukienkhac = Events::where([['id_loai',3],['duyet',1],])->orderBy('id','desc')->get();
        $new_01= News::get();
        return view('pages.body',compact('slide','giaitri','kienthuc','new_01','sukienkhac'));
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
        session_start();
        $fb = new Facebook([
            'app_id' => '420853728859282',
            'app_secret' => '2934d5b7cb9feee19aa59e6466d7b3d9',
            'default_graph_version' => 'v5.0',
            ]);

          $helper = $fb->getRedirectLoginHelper();

          $permissions = ['email'];
          $linkloginfb = $helper->getLoginUrl('https://localhost/A-event/event/public/pages/login/loginsuccess', $permissions);
          $linkloginfb = str_replace('amp;','',htmlspecialchars($linkloginfb));
        return view('pages.login',['linkloginfb'=>$linkloginfb]);
    }
    public function redirectToGoogle($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
   
    public function handleGoogleCallback($provider)
    {
        

        $user = Socialite::driver($provider)->stateless()->user();
        $authusers = $this->finddOrCreateUser($user, $provider);
        Auth::login($authusers, true);
        return redirect($this->redirectTo);
    //    return $user->token;
    }

    public function finddOrCreateUser($user){
        
        // dd($user);
        $checkuser = users::where('id_gg', $user->id)->get();
        if (count($checkuser) > 0) {
            Cookie::queue(Cookie::make('logingg', json_encode([
            'name'=>$user->name,
            'email'=>$user->email,
            'picture'=>$user->picture,
    ]), 2000));
        } else {
            $user = new users;
            $user->id_gg =  $user->id;
            $user->name =  $user->name;
            $user->email = $user->email;
            $user->hinh = $user->picture;
            $user->save();
            Auth::login($user);
            Cookie::queue(Cookie::make('logingg', json_encode([
            'name'=>$user->name,
            'email'=>$user->email,
            'picture'=>$user->picture,
    ]), 2000));
        }
        
        return redirect('pages/index');
    }
    

    public function getChitiet(Request $req){
        $chitiet = Events::where('id',$req->id)->first();
        return view('pages.chitiet',compact('chitiet'));
    }

    public function getBookingone(Request $req){
        $bookingone = Events::where('id',$req->id)->first();
        return view('pages.bookingone',compact('bookingone'));
    }

    public function getDanhmuc($id)
    {
        $danhmuc = Type_events::find($id);
        $sukien = Events::where('id_loai',$id)->paginate(9);
        return view('pages.danhmuc',['danhmuc'=>$danhmuc,'sukien'=>$sukien]);
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
        Cookie::queue(
            Cookie::forget('loginfb')
        );
        Auth::logout();
        return redirect('pages/index');

    }
// QL User
    public function getLoginAdmin(){
        return view('admin/login');
    }
    public function postLoginAdmin(Request $request){
        $this->validate($request,
            [
                'name'=>'required|min:3|max:32',
                'password'=>'required|min:3|max:32',
            ],
            [
                'name.required'=>'bạn chưa nhập email',
                'name.min'=>'email phải lớn hơn 3 kí tự',
                'name.max'=>'email không quá 32 kí tự',

                'password.required'=>'bạn chưa nhập mật khẩu',
                'password.min'=>'mật khẩu phải lớn hơn 3 kí tự',
                'password.max'=>'mật khẩu không quá 32 kí tự',
            ]);

        $arr = ['name' => $request->name, 'password' =>$request->password];
        if(Auth::attempt($arr)){
            return redirect('admin/dashboard')->with('thongbao', 'Đăng nhập thành công !');
        }else{

            return redirect('admin/login')->with('thongbao', 'bạn không có quyền truy cập!');
        }
    }

    public function getDashboard(){
        return view('admin.layouts.index');
    }
    // QL User

}
