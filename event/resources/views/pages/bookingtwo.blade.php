@extends('layouts.index')
@section('content')
    <main>
        <section class="booking-step-1">
            <div class="banner-event">
                <figure><img class="ofc" src="images/product/{{$bookingtwo->banner}}" alt="event"></figure>
            </div>
            <nav>
                <div class="container">
                    <ul>
                        <li class="item"><a href="{{ url('pages/bookingone',$bookingtwo->id) }}">Chọn vé</a></li>
                        <li class="item active"><a href="{{ url('pages/bookingtwo',$bookingtwo->id) }}">Thanh toán</a></li>
                        <li class="item">Hoàn tất</li>
                    </ul>
                </div>
            </nav>
            @if(isset($quantity1))
            <div class="booking">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="buyer-info">
                                <div class="title-box">
                                    <h3>Thông tin người nhận vé</h3>
                                </div>
                                <form action="#">
                                    <div class="form-row">
                                        <div class="form-group col-lg-6">
                                            <label for="firstname">Họ và Tên*</label>
                                            <input id="firstname" type="text" name="" placeholder="Nhập họ của bạn">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="email">Email*</label>
                                            <input id="email" type="text" name="" placeholder="Nhập địa chỉ email nhận vé">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="emailagain">Nhập lại Email*</label>
                                            <input id="emailagain" type="text" name="" placeholder="Nhập lại Email">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="phone">Số điện thoại*</label>
                                            <input id="phone" type="text" name="" placeholder="Nhập số điện thoại">
                                        </div>
                                        <button hidden></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="box-price">
                                <div class="title-box">
                                    <h3>THÔNG TIN ĐẶT VÉ</h3><a href="{{ url('pages/bookingone',$bookingtwo->id) }}">Sửa</a>
                                </div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Loại vé</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="loaive">Hạng THƯỜNG</div>
                                                <div class="gia">{{$bookingtwo->gia_ve}}</div>
                                            </td>
                                            <td>
                                                <div class="soluong">{{$quantity1}}</div>
                                                <div class="tonggia">{{$tong_tien_thuong}}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="loaive">Hạng VIP</div>
                                                <div class="gia">{{$bookingtwo->gia_ve}}</div>
                                            </td>
                                            <td>
                                                <div class="soluong">{{$quantity2}}</div>
                                                <div class="tonggia">{{$tong_tien_vip}}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tổng cộng</td>
                                            <td>{{$tong_cong}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="btn" type="submit">Hoàn tất</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger" style="width: 100%; background-color: #ffd800; padding: 100px; margin: 0;height: 100%;
                        text-align: center; font-size: 48px; font-family: Anton,sans-serif;"> 
                            Bạn chưa chọn vé
                        </div>
                    </div>
                </div>
                @endif
        </section>
    </main>

@endsection
