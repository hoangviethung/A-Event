<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use App\Type_events;
use Illuminate\Support\Str;
class EventController extends Controller
{

    //Hiển thị danh sách
    public function getDanhsach(){
        $event = Events::all();

        return view('admin.event.danhsach',['event'=>$event]);
    }


    //Thêm

    public function getThem(){
        $danhmuc = Type_events::all();
        return view('admin.event.them',['danhmuc'=>$danhmuc]);
    }
    public function postThem(Request $request){
        $this->validate($request,
        [
            'ten_su_kien' => 'required|unique:Events,ten_su_kien|min:2|max: 100|',
            'ngay_dien_ra' =>'required',
            'gia_ve'=> 'required|integer|min:1000|max:100000000|',
            'banner'=>'required',
            'ngay_dien_ra' =>'required',
            'dia_chi' => 'required',
            'ngay_ban' => 'required',
            'mo_ta' => 'required',
            'so_luong_ve' => 'required|integer|',
        ],
        [
            'ten_su_kien.required' => ' Bạn chưa nhập tên sự kiện',
            'ten_su_kien.unique' => 'Tên sự kiện đã trùng với 1 sự kiện khác',
            'ten_su_kien.min' => ' Tên sự kiện phải có từ 3 đến 100 ký tự',
            'ten_su_kien.max' => ' Tên sự kiện phải có từ 3 đến 100 ký tự',
            'ngay_dien_ra.required' => 'Bạn chưa chọn ngày diễn ra sự kiện',
            'gia_ve.required' => 'Bạn chưa nhập giá vé',
            'gia_ve.integer' => 'Giá vé phải là số ',
            'gia_ve.min' => 'Giá tối thiếu 1 000 đồng đến 100 000 000 đồng',
            'gia_ve.max' => 'Giá tối thiếu 1 000 đồng đến 100 000 000 đồng',
            'banner.required' => 'Bạn chưa add banner sự kiện',
            // 'banner.image'=> 'Banner phải là ảnh(jpeg, png, bmp, gif, svg)',
            'ngay_dien_ra.required'=> 'Bạn chưa thêm ngày diễn ra sự kiện',
            'dia_chi.required' => 'Bạn chưa nhập nơi diễn ra sự kiện',
            'ngay_ban.required' => 'Bạn chưa nhập ngày bán vé',
            'mo_ta.required' => 'Bạn chưa nhập mô tả sự kiện',
            'so_luong_ve.required' => 'Bạn chưa nhập số lượng vé',
            'so_luong_ve.integer' => ' Số lượng phải là số'



        ]);

        $event = new Events;
        $event->ten_su_kien = $request->ten_su_kien;
        $event->id_loai = $request->id_loai;
        $event->banner = $request->banner;
        $event->ngay_dien_ra = $request->ngay_dien_ra;
        $event->gia_ve = $request->gia_ve;
        $event->dia_chi = $request->dia_chi;
        $event->ngay_ban = $request->ngay_ban;
        $event->tom_tat = $request->tom_tat;
        $event->mo_ta = $request->mo_ta;
        $event->so_luong_ve = $request->so_luong_ve;
        $event->hien_thi_slider = $request->hien_thi_slider;
        $event->hien_thi_noi_bat = $request->hien_thi_noi_bat;
        $event->duyet = $request->duyet;

        if($request->hasFile('banner')){
            $file = $request->file('banner');
            $duoi = $file->getClientOriginalExtension();
            if($duoi !='jpg' && $duoi !='PNG' && $duoi !='jpeg')
                {
                    return redirect('admin/event/them')->with('loi','Vui lòng upload ảnh có đuôi JPG,PNG,JPEG');
                }
            $name = $file->getClientOriginalName();
            $banner = Str::random(10)."_". $name;
            $file->move('images/product',$banner);
            $event->banner = $banner;
        }
        else
        {
        $event->banner = "";
        }
        $event->save();
        return redirect('admin/event/them')->with('thongbao','Thêm thành công');
    }


    // Sửa
    public function getSua($id){
        $danhmuc = Type_events::all();
        $event = Events::find($id);
        return view('admin.event.sua',['danhmuc'=>$danhmuc],['event'=>$event]);

    }
    public function postSua(Request $request,$id){
        $event = Events::find($id);
        $this->validate($request,
        [
            'ten_su_kien' => 'required|min:2|max: 100|',
            'ngay_dien_ra' =>'required',
            'gia_ve'=> 'required|integer|min:1000|max:100000000|',
            'banner'=>'required',
            'ngay_dien_ra' =>'required',
            'dia_chi' => 'required',
            'ngay_ban' => 'required',
            'mo_ta' => 'required',
            'so_luong_ve' => 'required|integer|',
        ],
        [
            'ten_su_kien.required' => ' Bạn chưa nhập tên sự kiện',
            'ten_su_kien.min' => ' Tên sự kiện phải có từ 3 đến 100 ký tự',
            'ten_su_kien.max' => ' Tên sự kiện phải có từ 3 đến 100 ký tự',
            'ngay_dien_ra.required' => 'Bạn chưa chọn ngày diễn ra sự kiện',
            'gia_ve.required' => 'Bạn chưa nhập giá vé',
            'gia_ve.integer' => 'Giá vé phải là số ',
            'gia_ve.min' => 'Giá tối thiếu 1 000 đồng đến 100 000 000 đồng',
            'gia_ve.max' => 'Giá tối thiếu 1 000 đồng đến 100 000 000 đồng',
            'banner.required' => 'Bạn chưa add banner sự kiện',
            // 'banner.image'=> 'Banner phải là ảnh(jpeg, png, bmp, gif, svg)',
            'ngay_dien_ra.required'=> 'Bạn chưa thêm ngày diễn ra sự kiện',
            'dia_chi.required' => 'Bạn chưa nhập nơi diễn ra sự kiện',
            'ngay_ban.required' => 'Bạn chưa nhập ngày bán vé',
            'mo_ta.required' => 'Bạn chưa nhập mô tả sự kiện',
            'so_luong_ve.required' => 'Bạn chưa nhập số lượng vé',
            'so_luong_ve.integer' => ' Số lượng phải là số'



        ]);


        $event->ten_su_kien = $request->ten_su_kien;
        $event->id_loai = $request->id_loai;
        $event->banner = $request->banner;
        $event->ngay_dien_ra = $request->ngay_dien_ra;
        $event->gia_ve = $request->gia_ve;
        $event->dia_chi = $request->dia_chi;
        $event->ngay_ban = $request->ngay_ban;
        $event->tom_tat = $request->tom_tat;
        $event->mo_ta = $request->mo_ta;
        $event->so_luong_ve = $request->so_luong_ve;
        $event->hien_thi_slider = $request->hien_thi_slider;
        $event->hien_thi_noi_bat = $request->hien_thi_noi_bat;
        $event->duyet = $request->duyet;

        if($request->hasFile('banner')){
            $file = $request->file('banner');
            $duoi = $file->getClientOriginalExtension();
            if($duoi !='jpg' && $duoi !='PNG' && $duoi !='jpeg')
                {
                    return redirect('admin/event/sua')->with('loi','Vui lòng upload ảnh có đuôi JPG,PNG,JPEG');
                }
            $name = $file->getClientOriginalName();
            $banner = Str::random(10)."_". $name;
            $file->move('images/product',$banner);
            unlink("images/product/".$event->banner);
            $event->banner = $banner;
        }
        $event->save();

            return redirect('admin/event/sua/'.$event->id)->with('thongbao','Sửa thành công'); // Đưa người dùng về trnag sửa
    }


// Xóa

public function getXoa($id){
    $event = Events::find($id);
    $event->delete();
    return redirect('admin/event/danhsach')->with('thongbao','Bạn đã xóa thành công');
}
}
