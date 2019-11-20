<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class SeenmailController extends Controller
{

    public function getDanhsach(){
        return view('admin.thongbao.danhsach');
    }

    public function getThongbao(){
        return view('admin.thongbao.seenmail');
    }

    public function postThongbao(Request $request){
        $this->validate($request, [
            'ten_su_kien'=>'required',
            'email'=>'required',
            'ten_khach_hang'=>'required',
            'so_ve'=>'required',
            'cho_ngoi'=>'required',
            'dia_chi'=>'required',
            'mo_ta'=>'required',

        ],[
            'ten_su_kien.required'=>'bạn chưa nhập tên sự kiện',
            'email.required'=>'bạn chưa nhập email',
            'ten_khach_hang.required'=>'bạn chưa nhập tên khách hàng',
            'so_ve.required'=>'bạn chưa chọn số vé',
            'cho_ngoi.required'=>'bạn chưa nhập chỗ ngồi',
            'dia_chi.required'=>'bạn chưa nhập địa chỉ',
            'mo_ta.required'=>'bạn chưa nhập mô tả',
        ]);

        $data = [
            'ten_su_kien' => $request->ten_su_kien,
            'email' => $request->email,
            'ten_khach_hang' => $request->ten_khach_hang,
            'so_ve' => $request->so_ve,
            'cho_ngoi' => $request->cho_ngoi,
            'dia_chi' => $request->dia_chi,
            'mo_ta' => $request->mo_ta,
            'banner' => 'images/email/banner.png',
            'logo'=>'images/email/logo.png',
          
        ];
        Mail::send('admin.thongbao.layoutmail', $data, function ($message) use ($data) {
            $message->from('hotroaevent@gmail.com', 'Hỗ trợ Aevent');
            $message->to($data['email'], 'Khách hàng');
            $message->subject($data['ten_su_kien']);
            $message->subject($data['ten_khach_hang']);
            $message->subject($data['so_ve']);
            $message->subject($data['cho_ngoi']);
            $message->subject($data['dia_chi']);
            $message->subject($data['mo_ta']);
        });

        // echo "
        //    <script>
        //         alert('Gửi mail thành công !');
        //         window.location = '".url('admin/seenmail/getmail')."'
        //    </script>
        // ";

        return redirect('admin/seenmail/getmail')->with('thongbao','Gửi email thành công !');
    }
}
