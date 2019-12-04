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
                                    <th>Tiêu đề</th>
                                    <th>Loại tin</th>
                                    <th>Banner
                                   </th>
                                    <th>Ngày đăng</th>
                                    <th>Nổi bật</th>

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
