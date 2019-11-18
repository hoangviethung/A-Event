<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use App\Type_events;
use Illuminate\Support\Str;
use Carbon\Carbon;
class AddeventController extends Controller
{
    function __construct()
    {
        $this->middleware(function ($request, $next) {
            if($request->cookie('loginfb'))
            view()->share('loginfb',json_decode($request->cookie('loginfb')));
            return $next($request);
        });
    }
    public function getAddevent(){
        $danhmuc = Type_events::all();
        return view('pages.addevent',['danhmuc'=>$danhmuc]);
    }

    public function postAddevent(Request $request){
        $this->validate($request,
        [
            'ten_su_kien' => 'required|unique:Events,ten_su_kien|min:2|max: 100|',
            'gia_ve'=> 'required|integer|min:1000|max:100000000|',
            'banner'=>'required|mimes:jpeg,png,jpg,gif,svg|max:2048|',
            'logo'=>'mimes:jpeg,png,jpg.gif,svg|max:2048|',
            'ngay_dien_ra' =>'required',
            'thoi_gian' =>'required',
            // 'ngay_ban' => 'required',
            'dia_chi' => 'required',
            'mo_ta' => 'required',
            'so_luong_ve' => 'required|integer|',
        ],
        [
            'ten_su_kien.required' => ' Bạn chưa nhập tên sự kiện.',
            'ten_su_kien.unique' => 'Tên sự kiện đã trùng với 1 sự kiện khác.',
            'ten_su_kien.min' => ' Tên sự kiện phải có từ 3 đến 100 ký tự.',
            'ten_su_kien.max' => ' Tên sự kiện phải có từ 3 đến 100 ký tự.',
            'ngay_dien_ra.required' => 'Bạn chưa chọn ngày diễn ra sự kiện.',
            'thoi_gian.required' => 'Bạn chưa chọn giờ diễn ra sự kiện.',
            'gia_ve.required' => 'Bạn chưa nhập giá vé.',
            'gia_ve.integer' => 'Giá vé phải là số.',
            'gia_ve.min' => 'Giá tối thiếu 1 000 đồng đến 100 000 000 đồng.',
            'gia_ve.max' => 'Giá tối thiếu 1 000 đồng đến 100 000 000 đồng.',
            'banner.required' => 'Bạn chưa add banner sự kiện.',
            'banner.mimes' => 'Banner phải là hình có đuôi jpeg,png,jpg,gif,svg.',
            'banner.max'=>'Dung lượng hình không được quá 2Mb.',
            'logo.mimes'=>'Logo phải là hình có đuôi jpeg,png,jpg,gif,svg.',
            'logo.max'=>'Dung lượng hình không được quá 2Mb.',
            // 'banner.image'=> 'Banner phải là ảnh(jpeg, png, bmp, gif, svg)',
            'dia_chi.required' => 'Bạn chưa nhập nơi diễn ra sự kiện.',
            // 'ngay_ban.required' => 'Bạn chưa nhập ngày bán vé',
            'mo_ta.required' => 'Bạn chưa nhập mô tả sự kiện.',
            'so_luong_ve.required' => 'Bạn chưa nhập số lượng vé.',
            'so_luong_ve.integer' => ' Số lượng phải là số.'
        ]
        );

        $event = new Events;
        $event->ten_su_kien = $request->ten_su_kien;
        $event->id_loai = $request->id_loai;
        $event->banner = $request->banner;
        $event->logo = $request->logo;
        $event->ngay_dien_ra = $request->ngay_dien_ra;
        $event->thoi_gian = $request->thoi_gian;
        $event->gia_ve = $request->gia_ve;
        $event->dia_chi = $request->dia_chi;
        $event->so_luong_ve = $request->so_luong_ve;
        // $event->ngay_ban = $request->ngay_ban;
        $event->tom_tat = $request->tom_tat;
        $event->mo_ta = $request->mo_ta;

        if($request->hasFile('logo')){
            $file_logo = $request->file('logo');
            $name_logo = $file_logo->getClientOriginalName();
            $logo = Str::random(10)."_". $name_logo;
            $file_logo->move('images/logo',$logo);
            $event->logo = $logo;
        }
        else
        {
        $event->logo = "";
        }

        if($request->hasFile('banner')){
            $file = $request->file('banner');
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
        return redirect('pages/addevent')->with('thongbao','Đã thêm !!! Sự kiện bạn đang đợi phê duyệt');
    }

}
