<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Bills;
use Illuminate\Support\Facades\View;
class SeenmailController extends Controller
{
    public function __construct()
    {
        $bills = Bills::orderBy('id', 'desc')->paginate(5);
        view()->share('bills', $bills);
    }
    public function getDanhsach(){
        return view('admin.thongbao.danhsach');
    }
    public function getXoa($id){
        $bills = Bills::find($id);
        $bills->delete();
        return redirect('admin/booking/danhsach')->with('thongbao','Bạn đã xóa bills thành công !');
    }
<<<<<<< HEAD
=======
    public function postThongbao(Request $request){
        $this->validate($request, [
            'ten_su_kien'=>'required',
            'email'=>'required',
            'emailc'=>'required',
            'ten_khach_hang'=>'required',
            'so_ve'=>'required',
            'cho_ngoi'=>'required',

        ],[
            'ten_su_kien.required'=>'bạn chưa nhập tên sự kiện',
            'email.required'=>'bạn chưa nhập email khách hàng',
            'emailc.required'=>'bạn chưa nhập email chủ event',
            'ten_khach_hang.required'=>'bạn chưa nhập tên khách hàng',
            'so_ve.required'=>'bạn chưa chọn số vé',
            'cho_ngoi.required'=>'bạn chưa nhập chỗ ngồi',
        ]);

        $data = [
            'ten_su_kien' => $request->ten_su_kien,
            'email' => $request->email,
            'emailc' => $request->emailc,
            'ten_khach_hang' => $request->ten_khach_hang,
            'so_ve' => $request->so_ve,
            'cho_ngoi' => $request->cho_ngoi,
            'banner' => 'images/email/banner.jpg',
            'logo'=>'images/email/logo.png',

        ];
        Mail::send('admin.thongbao.layoutmail', $data, function ($message) use ($data) {
            $message->from('hotroaevent@gmail.com', 'Hỗ trợ Aevent');
            $message->to($data['email'], 'Khách hàng');
            $message->to($data['emailc'], 'Khách hàng');
            $message->subject($data['ten_su_kien']);
            $message->subject($data['ten_khach_hang']);
            $message->subject($data['so_ve']);
            $message->subject($data['cho_ngoi']);
        });

        // echo "
        //    <script>
        //         alert('Gửi mail thành công !');
        //         window.location = '".url('admin/seenmail/getmail')."'
        //    </script>
        // ";

        return redirect('admin/thongbao/danhsach');
    }
>>>>>>> c7eb1d108a5eacbf9f33b16807ce4b1f27b8dd67
}
