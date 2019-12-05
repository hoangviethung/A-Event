@extends('layouts.index')
@section('content')
    <main>
        <section class="user">
            <aside>
                <figure>
                    <div class="box-img"><img class="ofc" src="https://scontent.fsgn5-4.fna.fbcdn.net/v/t1.0-9/56446500_806542706382160_330506997671657472_n.jpg?_nc_cat=104&amp;_nc_oc=AQkJPyas19gTNCr6eI_T0vLLSNDj5RdUX2WpIxDmu0BWtBY6RTU8ALdFpub_xZEq9ts&amp;_nc_ht=scontent.fsgn5-4.fna&amp;oh=7e444b18b75f6dce936da9eed8f6778b&amp;oe=5E1AD9DB" alt=""></div>
                    <figcaption>
                        <h5>HOÀNG VIỆT HÙNG</h5>
                    </figcaption>
                </figure>
                <ul class="list-item"><a href="{{url('pages/eventcreate')}}">
                        <li class="item">Sự kiện đã tạo</li></a><a href="#">
                        <li class="item">Thông tin tài khoản</li></a><a href="{{ url('pages/dangxuat') }}">
                        <li class="item">Đăng xuất</li></a>
                </ul>
            </aside>
            <div class="_main-user">
                <div class="title-catalog wow fadeInLeft" data-wow-delay=".3s"><a href="{{url('pages/eventcreate')}}"><img class="icon" src="./images/icons/add.svg" alt="" srcset=""></a>
                    <div class="name-catalog"><span>A . Event</span><a href="{{url('pages/eventcreate')}}">
                            <h3>Các sự kiện đã tạo</h3></a></div>
                </div>
                <div class="row list-sk-da-tao">
                    @foreach ($eventcreate as $eventcreates)
                    <div class="col-lg-6">
                            <div class="item-event">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/product/{{$eventcreates->banner}}" alt="" srcset=""></div>
                                    <figcaption>
                                    <h3>{{$eventcreates->ten_su_kien}}</h3>
                                        <div class="info-event">
                                            <div class="item">
                                                <h5>Từ:<span>{{number_format($eventcreates->gia_ve)}} VND</span></h5>
                                            </div>
                                            <div class="item">
                                                <h5>Địa chỉ:<span>{{$eventcreates->dia_chi}}</span></h5>
                                            </div>
                                            <div class="item">
                                                <h5>Thời gian:<span>{{$eventcreates->ngay_dien_ra}}</span></h5>
                                            </div>
                                            <div class="item">
                                                <h5>Trạng thái:<span>Mở bán</span></h5>
                                            </div>
                                        </div>
                                    </figcaption>
                                    <div class="list-task">
                                        <div class="item"><a href="pages/eventcreate/sua/{{$eventcreates->id}}">Sửa</a></div>
                                        <div class="item"><a href="pages/eventcreate/xoa/{{$eventcreates->id}}">Xóa</a></div>
                                    </div>
                                </figure>
                            </div>
                        </div> 
                    @endforeach
                </div>
                {{ $eventcreate->links() }}
            </div>
        </section>
    </main>
@endsection