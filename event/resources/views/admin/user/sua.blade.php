@extends('admin.layouts.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Sửa tài khoản admin
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label>Tên tài khoản</label>
                                    <input class="form-control" name="name" placeholder="Nhập tên" />
                                </div>
                                <div class="form-group">
                                    <label>Ảnh admin</label>
                                    <input class="form-control" name="name" placeholder="Chọn avatar" type="file"/>
                                </div>
                                <div class="form-group">
                                    <label>Tài khoản</label>
                                    <input class="form-control" name="email" placeholder="Nhập email" />
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" name="password" placeholder="Nhập password" />
                                </div>
                                    <button type="submit" class="btn btn-default">Sửa</button>
                            <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection