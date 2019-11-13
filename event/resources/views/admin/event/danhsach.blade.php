@extends('admin.layouts.index')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                        <h1 class="page-header">
                            Danh sách sự kiện
                        </h1>
                        </center>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Chờ phê duyệt
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                            <div class="table-responsive">



                        <!-- /.col-lg-12 -->
                       <!--Table-->
                        <table class="table table-striped w-auto center">

                                <!--Table head-->
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Tên sự kiện</th>
                                    <th>Loại sự kiện</th>
                                    <th>Banner của <br>
                                    sự kiện</th>
                                    <th>Ngày diễn <br>
                                    ra sự kiện</th>
                                    <th>Ngày bán</th>
                                    <th>Giá vé</th>
                                    <th>Số lượng vé</th>
                                    <th>Nơi diễn ra <br>
                                    sự kiện</th>
                                    <th>Tóm tắt</th>
                                    <th>Mô tả</th>
                                    <th>Duyệt bài</th>
                                    <th colspan="2">Thao tác</th>
                                </tr>
                                </thead>
                                <!--Table head-->

                                <!--Table body-->
                                <tbody>
                                @foreach($duyet as $duyet)
                                    <tr class="table-info">
                                    <th>{{$duyet->id}}</th>
                                    <td><img src="images/logo/{{$duyet->logo}}" width="50" height="50"> : {{$duyet->ten_su_kien}}</td>
                                    <td>{{$duyet->type_events->ten_loai}}</td>
                                    <td><img src="images/product/{{$duyet->banner}}" width="120"  height="50"/></td>
                                    <td>{{$duyet->ngay_dien_ra}}</td>
                                    <td>{{$duyet->ngay_ban}}</td>
                                    <td>{{$duyet->gia_ve}}</td>
                                    <td>{{$duyet->so_luong_ve}}</td>
                                    <td>{{$duyet->dia_chi}}</td>
                                    <td>{{$duyet->tom_tat}}</td>
                                    <td>{{$duyet->mo_ta}}</td>
                                    <td>
                                        @if($duyet->duyet == 1 )
                                            {{"Cho phép"}}
                                        @else
                                        {{"Không"}}
                                        @endif
                                    </td>

                                    <th>
                                        <a href="admin/event/pheduyet/{{$duyet->id}}"><img src="images/edit.png" alt="A-event" srcset="" width="40" height="40"></a>
                                    </th>
                                    <th>
                                        <a href="admin/event/pheduyet/{{$duyet->id}}"><img src="images/xoa.png" alt="A-event" srcset="" width="40" height="40"></a>
                                    </th>
                                @endforeach


                                </tr>
                                </tbody>
                                <!--Table body-->
                        </table>
                        <!--Table-->
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Đã duyệt
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                            <div class="table-responsive">



                        <!-- /.col-lg-12 -->
                       <!--Table-->
                    @if(session('thongbao'))
                       <div class="alert alert-success">
                            {{session('thongbao')}}
                       </div>

                    @endif
                        <table class="table table-striped w-auto center">

                                <!--Table head-->
                                <thead>
                                <tr>
                                <th colspan="2">Thao tác</th>
                                    <th>Id</th>
                                    <th>Tên sự kiện</th>
                                    <th>Loại sự kiện</th>
                                    <th>Banner của <br>
                                    sự kiện</th>
                                    <th>Ngày diễn <br>
                                    ra sự kiện</th>
                                    <th>Ngày bán</th>
                                    <th>Giá vé</th>
                                    <th>Số lượng vé</th>
                                    <th>Nơi diễn ra <br>
                                    sự kiện</th>
                                    <th>Tóm tắt</th>
                                    <th>Mô tả</th>
                                    <th>Hiển thị trên <br>
                                    Slider trang chủ</th>
                                    <th>Hiển thị trên <br>
                                    sự kiện nổi bật</th>
                                    <th>Duyệt bài</th>
                                 
                                </tr>
                                </thead>
                                <!--Table head-->

                                <!--Table body-->
                                <tbody>
                                @foreach($event as $event)
                                <tr class="table-info">
                                <th>
                                       <a href="admin/event/sua/{{$event->id}}"><img src="images/edit.png" alt="A-event" srcset="" width="40" height="40"></a>
                                    </th>
                                    <th>
                                        <a href="admin/event/xoa/{{$event->id}}"><img src="images/xoa.png" alt="A-event" srcset="" width="40" height="40"></a>
                                    </th>
                                    <th>{{$event->id}}</th>
                                    <td><img src="images/logo/{{$event->logo}}" width="50" height="50"> : {{$event->ten_su_kien}}</td>
                                    <td>{{$event->type_events->ten_loai}}</td>
                                    <td><img src="images/product/{{$event->banner}}" width="120"  height="50"/></td>
                                    <td>{{$event->ngay_dien_ra}}</td>
                                    <td>{{$event->ngay_ban}}</td>
                                    <td>{{number_format($event->gia_ve)}} VNĐ</td>
                                    <td>{{$event->so_luong_ve}}</td>
                                    <td>{{$event->dia_chi}}</td>
                                    <td>{{$event->tom_tat}}</td>
                                    <td class="text-over" style="max-width: 500px; overflow: hidden; text-overflow: ellipsis; -webkit-line-clamp: 3; height: 75px;-webkit-box-orient: vertical;">{{$event->mo_ta}}</td>
                                    <td>
                                        @if($event->hien_thi_slider == 1 )
                                            {{"Cho phép"}}
                                        @else
                                        {{"Không"}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($event->hien_thi_noi_bat == 1 )
                                            {{"Cho phép"}}
                                        @else
                                        {{"Không"}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($event->duyet == 1 )
                                            {{"Cho phép"}}
                                        @else
                                        {{"Không"}}
                                        @endif
                                    </td>

                                   
                                </tr>
                                @endforeach
                                </tbody>
                                <!--Table body-->
                        </table>
                        <!--Table-->
                    </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection
