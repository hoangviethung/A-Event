@extends('admin.layouts.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Thêm danh mục
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input class="form-control" name="tendanhmuc" placeholder="Nhập tên danh mục" />
                            </div>
                            <div class="form-group">
                                    <label>Loại danh mục</label>
                                    <select class="form-control">
                                        <option value="0" name="loaisukien">Chọn loại danh mục</option>
                                        <option value="1" name="loaisukien">Sự kiện hót</option>
                                    </select>
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