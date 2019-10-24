<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Type_events;

class DanhmucController extends Controller
{
    public function getDanhsach(){
        $danhmuc = Type_events::all();
        return view('admin.danhmuc.danhsach',['danhmuc'=>$danhmuc]);
    }

    public function getSua($id){
        $danhmuc = Type_events::find($id);
        return view('admin.danhmuc.sua',['danhmuc'=>$danhmuc]);

    }
    public function postSua(){

    }
    public function getThem(){
        return view('admin.danhmuc.them');
    }
    public function postThem(Request $request){
        $this->validate($request,
        [
            'ten_loai' => 'required | min:2 | max: 100'
        ],
        [
            'ten_loai.required' => ' Bạn chưa nhập tên danh mục',
            'ten_loai.min' => ' Tên danh mục phải có từ 2 đến 100 ký tự',
            'ten_loai.max' => ' Tên danh mục phải có từ 2 đến 100 ký tự'
        ]);

        $danhmuc = new Type_events;
        $danhmuc->ten_loai = $request->ten_loai;
        $danhmuc->save();

        return redirect('admin/danhmuc/them')->with('thongbao','Thêm thành công');
    }



}
