@extends('admin.layouts.index')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                        <h1 class="page-header">
                            Danh Sách Tin Tức
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
                                <th colspan="2">Thao tác</th>
                                    <th>STT</th>
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

                                </tr>
                                </thead>
                                <!--Table head-->

                                <!--Table body-->
                                <tbody>
                                    <td>
                                        <a href="admin/new/sua"><img src="images/edit.png" alt="A-event" srcset="" width="40" height="40"></a>
                                    </td>
                                    <td>
                                        <a href="admin/new/xoa"><img src="images/xoa.png" alt="A-event" srcset="" width="40" height="40"></a>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
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
                
                        <table class="table table-striped w-auto center">

                                <!--Table head-->
                                <thead>
                                <tr>
                                <th colspan="2">Thao tác</th>
                                    <th>STT</th>
                                    <th>Tên sự kiện</th>
                                    <th>Loại sự kiện</th>
                                    <th>Banner của <br>
                                    sự kiện</th>
                                    <th>Ngày diễn <br>
                                    ra sự kiện</th>
                                    <th>Thời gian
                                        <br> diễn ra</th>
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
                                        <td>
                                            <a href="admin/addevent/sua"><img src="images/edit.png" alt="A-event" srcset="" width="40" height="40"></a>
                                        </td>
                                        <td>
                                            <a href="admin/addevent/xoa"><img src="images/xoa.png" alt="A-event" srcset="" width="40" height="40"></a>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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
