@extends('admin.layouts.index')
@section('content')
     <!-- Page Content -->
     <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Danh sách slider
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- /.col-lg-12 -->
                       <!--Table-->
                        <table class="table table-striped w-auto center">

                                <!--Table head-->
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Tên sự kiện</th>
                                    <th>Loại sự kiện</th>
                                    <th>Thời gian</th>
                                    <th>Tóm tắt</th>
                                    <th>Địa điểm</th>
                                    <th colspan="2">Thao tác</th>
                                </tr>
                                </thead>
                                <!--Table head-->
                            
                                <!--Table body-->
                                <tbody>
                                <tr class="table-info">
                                    <th>1</th>
                                    <td>Kate</td>
                                    <td>Moss</td>
                                    <td>USA</td>
                                    <td>New York City</td>
                                    <td>Web Designer</td>
                                    <td>
                                       <a href="admin/slider/sua"><img src="images/edit.png" alt="A-event" srcset="" width="40" height="40"></a>
                                    </td>
                                    <td>
                                        <a href="admin/slider/xoa"><img src="images/xoa.png" alt="A-event" srcset="" width="40" height="40"></a>
                                    </td>
                                </tr>
                                </tbody>
                                <!--Table body-->
                        </table>
                        <!--Table-->
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->  
@endsection