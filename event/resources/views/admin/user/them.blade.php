@extends('admin.layouts.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Đăng kí
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Tên tài khoản</label>
                                <input class="form-control" name="name" placeholder="Nhập tên" />
                            </div>
                            <div class="form-group">
                                <label>Ảnh admin</label>
                                <input class="form-control" name="hinh" placeholder="Chọn avatar" type="file"/>
                            </div>
                            <div class="form-group">
                                <label>Tài khoản</label>
                                <input class="form-control" name="email" placeholder="Nhập email" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" name="password" placeholder="Nhập password" />
                            </div>
                           
                            <button type="submit" class="btn btn-default">Thêm</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper --> 
@endsection