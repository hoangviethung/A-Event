@extends('admin.layouts.index')
@section('content')
     <!-- Page Content -->
     <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Danh Sách Accounts
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        @if(session('thongbao'))
                            <div class="alert alert-success" style="width: 50% !important;">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <!-- /.col-lg-12 -->
                        <div class="table-responsive">
                            <table class="table table-striped w-auto center">

                                    <!--Table head-->
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Email Accounts</th>
                                        <th>Tên Accounts</th>
                                        <th>Mật Khẩu</th>
                                        <th>Số Điện Thoại</th>
                                        <th>Địa Chỉ</th>
                                        <th>Ngày Sinh</th>
                                        <th>Giới Tính</th>
                                        <th>Hình Accounts</th>
                                        <th>Loại Khách</th>
                                        <th colspan="2">Thao tác</th>
                                    </tr>
                                    </thead>
                                    <!--Table head-->
                                    
                                    <!--Table body-->
                                    <tbody>
                                        @foreach ($user as $use)
                                            <tr class="table-info">
                                            <td>{{$use->id}}</td>
                                            <td>{{$use->email}}</td>
                                            <td>{{$use->name}}</td>
                                            <td>{{$use->password}}</td>
                                            <td>{{$use->dien_thoai}}</td>
                                            <td>
                                                <textarea cols="30" rows="3">{{$use->dia_chi}}</textarea>
                                                
                                            
                                            </td>
                                            <td>{{$use->ngay_sinh}}</td>
                                            <td>{{$use->gioi_tinh}}</td>
                                            <td><img src="images/user/{{$use->hinh}}" alt="A-event" srcset="" width="50" height="50"></td>
                                            <td>{{$use->vip}}</td>
                                            <td> <a href="admin/user/sua/{{$use->id}}"><img src="images/edit.png" alt="A-event" srcset="" width="40" height="40"></a>
                                            </td>
                                            <td>
                                            <a href="admin/user/xoa/{{$use->id}}"><img src="images/xoa.png" alt="A-event" srcset="" width="40" height="40"></a>
                                            </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <!--Table body-->
                            </table>
                        </div>
                        <!--Table-->
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->  
@endsection