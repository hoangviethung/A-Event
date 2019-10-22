@extends('admin.layouts.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Thêm slider
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Tên sự kiện</label>
                                <input class="form-control" name="tensukien" placeholder="Nhập tên sự kiện" />
                            </div>
                            <div class="form-group">
                                    <label>Loại sự kiện</label>
                                    <select class="form-control">
                                        <option value="0" name="loaisukien">Chọn loại sự kiện</option>
                                        <option value="1" name="loaisukien">Sự kiện hót</option>
                                    </select>
                                </div>
                            <div class="form-group">
                                <label>Thời gian diễn ra</label>
                                <input class="form-control" name="thoigian" placeholder="Nhập thời gian diễn ra" />
                            </div>
                            <div class="form-group">
                                <label>Tóm tắt về sự kiện</label>
                                <input class="form-control" name="tomtat" placeholder="Tóm tắt sự kiện" />
                            </div>
                            <div class="form-group">
                                <label>Địa điển diễn ra</label>
                                <input class="form-control" name="diadiem" placeholder="Địa điểm diễn ra sự kiện" />
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