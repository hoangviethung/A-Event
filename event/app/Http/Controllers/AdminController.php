<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\admins;
class AdminController extends Controller
{
    function __construct()
    {
        if(Auth::check()){
            view()->share('admin', Auth::user());
        }
    }
    public function getDanhsach(){
        $admin = admins::all();
        return view('admin.user.danhsach', ['admin'=>$admin]);
    }
    
    public function getThem(){
        return view('admin.user.them');
    }

    public function postThem(Request $request){
        $this->validate($request, 
        [
            'name'=>'required|min:3|max:32',
            'hinh'=>'required',
            'email'=>'required|min:5|email',
            'password'=>'required|min:3|max:32',
        ],
        [
            'name.required'=>'bạn chưa nhập tên',
            'name.min'=>'tên từ 3 đến 32 kí tự',
            'name.max'=>'tên không quá 32 kí tự',

            'hinh.required'=>'bạn chưa chọn hình',

            'email.required'=>'bạn chưa nhập email',
            'email.min'=>'email phải lớn hơn 5 kí tự',
            'email.email'=>'bạn nhập không đúng đinh dạng email',

            'password.required'=>'bạn chưa nhập password',
            'password.min'=>'password từ 3 đến 32 kí tự',
            'password.max'=>'password không quá 32 kí tự',
        ]);
          // Lưu vào model
            $admin = new admins;
            $admin->id = $request->id;
            $admin->name = $request->name;
            if($request->hasFile('hinh')){
                $file = $request->file('hinh');
                if($file->getClientOriginalExtension() == 'png' || 'jpg' || 'jpeg' || 'gif'){
                    $filename = md5(time()).'_'.$file->getClientOriginalName();
                    $file->move(public_path('images/admin',$filename));
                    $link = $filename;
                    $admin->hinh = $link;
                }
            }else{
                $admin->hinh= '';
            }
            $admin->email = $request->email;
            $admin->password = bcrypt($request->password);
            $admin->save();

            return redirect('admin/user/them')->with('thongbao', 'Đăng kí thành công !');
    }

    public function getSua($id){
        $admin = admins::find($id);
        return view('admin.user.sua',['admin'=>$admin]);
    }

    public function postSua(Request $request, $id){
        $admin = admins::find($id);
        $this->validate($request, 
        [
            'name'=>'required|min:3|max:32',
            'hinh'=>'required|image',
            'email'=>'required|min:5|email',
            'password'=>'required|min:3|max:32',
        ],
        [   
            'name.required'=>'bạn chưa nhập tên',
            'name.min'=>'tên phải từ 3 đến 32 kí tự',
            'name.max'=>'tên không quá 32 kí tự',

            'hinh.required'=>'bạn chưa chọn hình',
            'hinh.image'=>'không đúng định dạng file',

            'email.required'=>'bạn chưa nhập email',
            'email.min'=>'email phải lớn hơn 5 kí tự',
            'email.email'=>'không đúng định dạng email',

            'password.required'=>'bạn chưa nhập password',
            'password.min'=>'password phải từ 3 đến 32 kí tự',
            'password.max'=>'password không quá 32 kí tự',
        ]);
  
            $admin->name = $request->name;
            if($request->hasFile('hinh')){
                $file = $request->file('hinh');
                if($file->getClientOriginalExtension() == 'png' || 'jpg' || 'jpeg' || 'gif'){
                    $filename = md5(time()).'_'.$file->getClientOriginalName();
                    $file->move(public_path('images/admin',$filename));
                    $link = $filename;
                    $admin->hinh = $link;
                }
                }else{
                    $admin->hinh= '';
            }
            $admin->email = $request->email;
            $admin->password = bcrypt($request->password);
            $admin->save();
            return redirect('admin/user/sua/'.$id)->with('thongbao', 'Sửa thành công !');
    }

    public function getXoa($id){
        $admin = admins::find($id);
        $admin->delete();
        return redirect('admin/user/danhsach')->with('thongbao','Xóa thành công !');
    }

     // login admin
    public function getLoginAdmin(){
        return view('admin.login');
        }
    public function postLoginAdmin(Request $request){
        $arr = ['email' => $request->email, 'password' =>$request->password];
        if(Auth::attempt($arr)){
            return redirect('admin/danhmuc/danhsach');
        }else{
            return redirect('admin/login')->with('thongbao', 'Đăng nhập không thành công !');
        }
        }
    public function getLogoutAdmin(){
        Auth::logout();
        return redirect('admin/login');
    }
    // login admin

}
