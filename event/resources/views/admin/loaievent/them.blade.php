@extends('admin.layouts.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Thêm loại sự kiện
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                        <form action="admin/loaievent/them" method="POST">
                            <!-- để truyền dữ liệu phải cho nó 1 cái token -->
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tên loại sự kiện</label>
                                        <input class="form-control" name="ten_loai_event" placeholder="Nhập tên loại sự kiện"/>
                                        @if($errors->has('ten_loai_event'))
                                            <span class="error">
                                                {{$errors->first('ten_loai_event')}}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Danh mục sự kiện</label>
                                        <select class="form-control" name="danh_muc" >
                                                @foreach($danhmuc as $danhmuc)
                                                    <option value="{{$danhmuc->id}}">{{$danhmuc->ten_loai}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">+ THÊM</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection
