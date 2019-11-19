@extends('layouts.index')
@section('content')
    <main>
        <section class="booking-step-1">
            <div class="banner-event">
                <figure><img class="ofc" src="images/banner/5.png" alt="event"></figure>
            </div>
            <nav>
                <div class="container">
                    <ul>
                        <li class="item"><a href="{{ url('pages/bookingone') }}">Chọn vé</a></li>
                        <li class="item active"><a href="{{ url('pages/bookingtwo') }}">Thanh toán</a></li>
                        <li class="item">Hoàn tất</li>
                    </ul>
                </div>
            </nav>
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
                                            <label for="firstname">Họ*</label>
                                            <input id="firstname" type="text" name="" placeholder="Nhập họ của bạn">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="lastname">Tên*</label>
                                            <input id="lastname" type="text" name="" placeholder="Nhập tên của bạn">
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
                                    <h3>THÔNG TIN ĐẶT VÉ</h3><a href="{{ url('pages/bookingone') }}">Sửa</a>
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
                                                <div class="loaive">Hạng A</div>
                                                <div class="gia">4.500.000</div>
                                            </td>
                                            <td>
                                                <div class="soluong">3</div>
                                                <div class="tonggia">13.500.000</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="loaive">Hạng B</div>
                                                <div class="gia">3.500.000</div>
                                            </td>
                                            <td>
                                                <div class="soluong">1</div>
                                                <div class="tonggia">3.500.000</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tổng cộng</td>
                                            <td>17.000.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="btn" type="submit">Hoàn tất</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection