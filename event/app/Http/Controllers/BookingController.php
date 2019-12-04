<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Bills;
use Mail;
use App\Events;
class BookingController extends Controller
{
    function __construct()
    {

        $this->middleware(function ($request, $next) {
             if($request->cookie('loginfb'))
            view()->share('loginfb',json_decode($request->cookie('loginfb')));
            return $next($request);
        });
        $this->middleware(function ($request, $next) {
             if($request->cookie('logingg'))
            view()->share('logingg',json_decode($request->cookie('logingg')));
            return $next($request);
        });

    }
    public function getBookingone(Request $req){
        $bookingone = Events::where('id',$req->id)->first();
        return view('pages.bookingone',compact('bookingone'));
    }
    public function getBookingtwo(Request $req){
   
        $bookingtwo = Events::where('id',$req->id)->first();
        return view('pages.bookingtwo',['bookingtwo'=>$bookingtwo]);



    }
    public function postBookingtwo(Request $req){
        $bookingtwo = Events::where('id',$req->id)->first();
        // $this->validate($req,
        // [
        //     'email'=>'unique:Bills,email'
        // ],
        // [
        //     'email'=>'Bạn đã mua vé rồi'
        // ]);
        // $bookingtwo = new Bills;

        return view('pages.bookingtwo',['bookingtwo'=>$bookingtwo,'quantity1'=>$req->quantity1,'quantity2'=>$req->quantity2,'tong_tien_thuong'=>$req->tong_tien_thuong,'tong_tien_vip'=>$req->tong_tien_vip,'tong_cong'=>$req->tong_cong])->with('thongbao','Thành công !');

    }

    public function postBookingthree(Request $req){

        $book = new Bills;
        $book->ten_nguoi_mua = $req->ten_nguoi_mua;
        $book->phone = $req->phone;
        $book->id_event = $req->id;
        $book->email = $req->email;
        $book->created_at = $req->created_at;
        $book->sl_ve_thuong = $req->sl_ve_thuong;
        $book->tong_tien_ve_thuong = $req->tong_tien_ve_thuong;
        $book->sl_ve_vip = $req->sl_ve_vip;
        $book->tong_tien_ve_vip = $req->tong_tien_ve_vip;
        $book->tong_tien = $req->tong_tien;
        $book->cho_ngoi = $req->cho_ngoi;
        $book->save();
        $bookingtwo = Events::where('id',$req->id)->first();
        $data = [
            'ten_su_kien' => $bookingtwo->ten_su_kien,
            'email' => $req->email,
            'emailc' => 'nguyentuyen1322@gmail.com',
            'ten_khach_hang' => $req->ten_nguoi_mua,
            'so_ve_thuong' => $req->sl_ve_thuong,
            'so_ve_vip' => $req->sl_ve_vip,
            'tong_tien_thuong' => $req->tong_tien_ve_thuong,
            'tong_tien_vip' => $req->tong_tien_ve_vip,
            'tong_tien' => $req->tong_tien_ve_thuong + $req->tong_tien_ve_vip,
            'banner' => 'images/email/banner.jpg',
            'logo'=>'images/email/logo.png',

        ];
        Mail::send('admin.thongbao.layoutmail', $data, function ($message) use ($data) {
            $message->from('hotroaevent@gmail.com', 'Hỗ trợ Aevent');
            $message->to($data['email'], 'Khách hàng');
            $message->to($data['emailc'], 'Khách hàng');
            $message->subject($data['ten_khach_hang']);
            $message->subject($data['so_ve_thuong']);
            $message->subject($data['so_ve_vip']);
            $message->subject($data['tong_tien_thuong']);
            $message->subject($data['tong_tien_vip']);
            $message->subject($data['tong_tien']);
            $message->subject($data['ten_su_kien']);
        });

        return view('pages.bookingthree',['bookingtwo'=>$bookingtwo,'thanhcong'=>'Thành công vui lòng check mail.']);
    }

    public function getBookingthree(Request $req){
        $bookingtwo = Events::where('id',$req->id)->first();
        return view('pages.bookingthree',['bookingtwo'=>$bookingtwo, 'err'=>'Bạn chưa thanh toán']);

    }
}
