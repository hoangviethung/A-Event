@extends('layouts.index')
@section('content')
    <main>
        <section class="booking-step-1">
            <div class="banner-event">
                <figure><img class="ofc" src="./images/product/{{$bookingone->banner}}" alt="" srcset=""></figure>
            </div>
            <nav>
                <div class="container">
                    <ul>
                        <li class="item active"><a href="{{ url('pages/bookingone') }}">Chọn vé</a></li>
                        <li class="item"><a href="{{ url('pages/bookingtwo') }}">Thanh toán</a></li>
                        <li class="item">Hoàn tất</li>
                    </ul>
                </div>
            </nav>
            <div class="booking">
                <div class="container">
                <form action="pages/bookingone" method="post">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="choose-tickets">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>LOẠI VÉ</th>
                                            <th>GIÁ VÉ</th>
                                            <th>SỐ LƯỢNG</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>HẠNG THƯỜNG</td>
                                            <td>{{number_format($bookingone->gia_ve)}} VNĐ</td>
                                            <td>
                                                <div class="quantity">
                                                    <input type="number" min="1" max="9" step="1" value="1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>HẠNG VIP</td>
                                            <td>{{number_format($bookingone->gia_ve_vip)}} VNĐ</td>
                                            <td>
                                                <div class="quantity">
                                                    <input type="number" min="1" max="9" step="1" value="1">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="box-price">
                                <div class="title-box">
                                    <h3>THÔNG TIN ĐẶT VÉ</h3>
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
                                                <div class="loaive">Hạng THƯỜNG ( Còn {{$bookingone->so_luong_ve_thuong}} vé )</div>
                                                <div class="gia">{{number_format($bookingone->gia_ve)}} VNĐ</div>
                                            </td>
                                            <td>
                                                <div class="soluong">3</div>
                                                <div class="tonggia">{{number_format($bookingone->gia_ve)}} VNĐ</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="loaive">Hạng VIP ( Còn {{$bookingone->so_luong_ve_vip}} vé )</div>
                                                <div class="gia">{{number_format($bookingone->gia_ve_vip)}} VNĐ</div>
                                            </td>
                                            <td>
                                                <div class="soluong">1</div>
                                                <div class="tonggia">{{number_format($bookingone->gia_ve_vip)}} VNĐ</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tổng cộng</td>
                                            <td><?php
                                                $a=array($bookingone->gia_ve,$bookingone->gia_ve_vip);
                                                echo number_format(array_sum($a));
                                                ?> VNĐ
                                            </td>
                                        </tr>
                                    </tbody>
                                </table><a class="btn" href="{{ url('pages/bookingtwo') }}">Tiếp tục</a>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </section>
    </main>
@endsection
