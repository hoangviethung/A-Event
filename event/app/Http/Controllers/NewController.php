<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Type_news;
use Illuminate\Support\Str;
use Carbon\Carbon;
class NewController extends Controller
{
    public function getDanhsach(){
        $tintuc = News::all();
        return view('admin.new.danhsach',compact('tintuc'));

    }
// Thêm
    public function getThem(){
        $loaitin = Type_news::all();
        return view('admin.new.them',['loaitin'=>$loaitin]);
    }
    public function postThem(Request $request){
       $this->validate($request,
       [
        'tieu_de' => 'required|unique:News,tieu_de|min:2|max: 100|',
        'banner'=>'required|mimes:jpeg,png,jpg,gif,svg|max:2048|',
        'noi_dung'=>'required',
       ],
       [
        'tieu_de.required' => ' Bạn chưa nhập tiêu đề',
        'tieu_de.unique' => 'Tiêu đề đã trùng với 1 sự kiện khác',
        'tieu_de.min' => ' Tiêu đề phải có từ 3 đến 100 ký tự',
        'tieu_de.max' => ' Tiêu đề phải có từ 3 đến 100 ký tự',
        'banner.required' => 'Bạn chưa add banner sự kiện',
        'banner.mimes' => 'Banner phải là hình có đuôi jpeg,png,jpg,gif,svg',
        'banner.max'=>'Dung lượng hình không được quá 2Mb',
        'noi_dung.required' => 'Bạn chưa nhập nội dung tin tức',
       ]
       );

       $news = new News;
       $news->tieu_de = $request->tieu_de;
       $news->loai_tin = $request->loai_tin;
       $news->ngay_dang = $request->ngay_dang;
       $news->noi_dung = $request->noi_dung;
       $news->noi_bat= $request->noi_bat;


       if($request->hasFile('banner')){
        $file = $request->file('banner');
        $name = $file->getClientOriginalName();
        $banner = Str::random(10)."_". $name;
        $file->move('images/news',$banner);
        $news->banner = $banner;
    }
    else
    {
    $news->banner = "";
    }
    $news->save();
    return redirect('admin/new/them')->with('thongbao','Thêm thành công');
    }




    public function getSua(){
        return view('admin.new.sua');
    }
}
