<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Type_events;
use App\LoaiEvent;

class LoaiEventController extends Controller
{

    public function getDanhsach(){
        $loaievent = LoaiEvent::all();
        return view('admin.loaievent.danhsach',['loaievent'=>$loaievent]);
    }


    //SỬa danh mục
    public function getSua($id){
        $loaievent = LoaiEvent::find($id);
        $danhmuc = Type_events::all();
        return view('admin.loaievent.sua',['loaievent'=>$loaievent],['danhmuc'=>$danhmuc]);

    }
    public function postSua(Request $request,$id){
        $loaievent = LoaiEvent::find($id);
        $this->validate($request,
        [
            'ten_loai_event' => 'required|unique:Type_events,ten_loai|min:3|max:100|'
        ],
        [
            'ten_loai_event.required' => 'Bạn chưa nhập tên loại sự kiện',
            'ten_loai_event.unique' => 'Tên loại sự kiện đã tồn tại',
            'ten_loai_event.min' => 'Tên loại sự phải có từ 3 đến 100 ký tự',
            'ten_loai_event.max' => 'Tên loại sự phãi có từ 3 đến 100 ký tự',
        ]);
            $loaievent->ten_loai_event = $request->ten_loai_event;
            $loaievent->danh_muc = $request->danh_muc;
            $loaievent->save();

            return redirect('admin/loaievent/sua/'.$loaievent->id)->with('thongbao','Sửa thành công'); // Đưa người dùng về trnag sửa
    }

    //THêm danh mục
    public function getThem(){
        $danhmuc = Type_events::all();
        return view('admin.loaievent.them',['danhmuc'=>$danhmuc]);
    }
    public function postThem(Request $request){
        $this->validate($request,
        [
            'ten_loai_event' => 'required|min:2|max: 100|'
        ],
        [
            'ten_loai_event.required' => ' Bạn chưa nhập tên danh mục',
            'ten_loai_event.min' => ' Tên loại sự kiện phải có từ 2 đến 100 ký tự',
            'ten_loai_event.max' => ' Tên loại sự kiện phải có từ 2 đến 100 ký tự'
        ]);

        $loaievent = new LoaiEvent;
        $loaievent->ten_loai_event = $request->ten_loai_event;
        $loaievent->danh_muc = $request->danh_muc;
        $loaievent->save();
        return redirect('admin/loaievent/them')->with('thongbao','Thêm thành công');
    }

//Xóa

    public function getXoa($id){
        $loaievent = LoaiEvent::find($id);
        $loaievent->delete();
        return redirect('admin/loaievent/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
}
