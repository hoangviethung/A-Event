@extends('admin.layouts.index')
@section('content')
     <!-- Page Content -->
     <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Danh sách tài khoản
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- /.col-lg-12 -->
                       <!--Table-->
                       @if(count($errors) > 0)
                       <div class="alert alert-danger" style="width: 50% !important;">
                           @foreach ($errors->all() as $err)
                                   {{$err}}<br />
                           @endforeach
                       </div>
                   @endif

                   @if(session('thongbao')) 
                       <div class="alert alert-success" style="width: 50% !important;">
                           {{session('thongbao')}}
                       </div>
                   @endif
                        <div class="table-responsive">
                            <table class="table table-striped w-auto center">

                                    <!--Table head-->
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Tên admin</th>
                                        <th>Hình admin</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th colspan="2">Thao tác</th>
                                    </tr>
                                    </thead>
                                    <!--Table head-->
                                    
                                    <!--Table body-->
                                    <tbody>
                                        @foreach ($admin as $adm)
                                            <tr class="table-info">
                                                <td>{{$adm->id}}</td>
                                                <td>{{$adm->name}}</td>
                                                <td><img src="images/admin/{{$adm->hinh}}" alt="Admin-Event" width="50" height="50"></td>
                                                <td>{{$adm->email}}</td>
                                                <td>{{$adm->password}}</td>
                                                <td>
                                                <a href="admin/user/sua/{{$adm->id}}"><img src="images/edit.png" alt="A-event" srcset="" width="40" height="40"></a>
                                                </td>
                                                <td>
                                                <a href="admin/user/xoa/{{$adm->id}}"><img src="images/xoa.png" alt="A-event" srcset="" width="40" height="40"></a>
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