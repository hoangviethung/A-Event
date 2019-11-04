@extends('admin.layouts.index')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Danh sách sự kiện
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
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
                                    <th>Id</th>
                                    <th>Tên sự kiện</th>
                                    <th>Loại sự kiện</th>
                                    <th>Banner của sự kiện</th>
                                    <th>Ngày diễn ra sự kiện</th>
                                    <th>Giá vé</th>
                                    <th>Số lượng vé</th>
                                    <th>Nơi diễn ra sự kiện</th>
                                    <th>Ngày bán</th>
                                    <th>Tóm tắt</th>
                                    <th>Mô tả</th>
                                    <th>Hiển thị trên Slider trang chủ</th>
                                    <th>Hiển thị trên sự kiện nổi bật</th>
                                    <th>Duyệt bài</th>
                                    <th colspan="2">Thao tác</th>
                                </tr>
                                </thead>
                                <!--Table head-->

                                <!--Table body-->
                                <tbody>
                                @foreach($event as $event)
                                <tr class="table-info">
                                    <th>{{$event->id}}</th>
                                    <td>{{$event->ten_su_kien}}</td>
                                    <td>{{$event->type_events->ten_loai}}</td>
                                    <td>
                                    <img src="images/product/{{$event->banner}}" width="120px"  />



                                    </td>
                                    <td>{{$event->ngay_dien_ra}}</td>
                                    <td>{{$event->gia_ve}}</td>
                                    <td>{{$event->so_luong_ve}}</td>
                                    <td>{{$event->dia_chi}}</td>
                                    <td>{{$event->ngay_ban}}</td>
                                    <td>{{$event->tom_tat}}</td>
                                    <td>{{$event->mo_ta}}</td>
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

                                    <th>
                                       <a href="admin/event/sua/{{$event->id}}"><img src="images/edit.png" alt="A-event" srcset="" width="40" height="40"></a>
                                    </th>
                                    <th>
                                        <a href="admin/event/xoa/{{$event->id}}"><img src="images/xoa.png" alt="A-event" srcset="" width="40" height="40"></a>
                                    </th>
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
