@extends('admin.layouts.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Thêm sự kiện
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @endif

                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                        <form action="admin/event/them" method="POST">
                            <!-- để truyền dữ liệu phải cho nó 1 cái token -->
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Tên sự kiện</label>
                                <input class="form-control" name="ten_su_kien" placeholder="Nhập tên sự kiện"/>
                            </div>
                            <div class="form-group">
                                <label>Thể loại sự kiện</label>
                            <select class="form-control" name="id_loai" >
                                    @foreach($danhmuc as $danhmuc)
                                        <option value="{{$danhmuc->id}}">{{$danhmuc->ten_loai}}</option>
                                    @endforeach
                            </select>
                            </div>
                            <div class="form-group">
                                <label>Ảnh Banner của sự kiện</label>
                                <input class="form-control" name="banner" type="file"/>
                            </div>
                            <div class="form-group">
                                <label>Ngày diễn ra sự kiện</label>
                                <input class="form-control" name="ngay_dien_ra" type="date"/>
                            </div>
                            <div class="form-group">
                                <label>Giá vé</label>
                                <input class="form-control" name="gia_ve" type="text"/>
                            </div>
                            <div class="form-group">
                                <label>Số lượng vé</label>
                                <input class="form-control" name="so_luong_ve" type="text"/>
                            </div>
                            <div class="form-group">
                                <label>Nơi diễn ra sự kiện</label>
                                <input class="form-control" name="dia_chi" type="text"/>
                            </div>
                            <div class="form-group">
                                <label>Ngày bán vé</label>
                                <input class="form-control" name="ngay_ban" type="date"/>
                            </div>

                            <div class="form-group">
                                <label>Tóm tắt sự kiện ( Hiển thị trên Slider, Sự kiện nổi bật)</label>
                                <textarea class="form-control" rows="2" cols="20" name="tom_tat"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Mô tả sự kiện</label>
                                <textarea class="form-control" rows="7" cols="20" name="mo_ta"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Hiển thị sự kiện trên Slider trang chủ</label>
                                <input class="form-control" type="checkbox" name="hien_thi_slider" value="1"><br/>
                            </div>
                            <div class="form-group">
                                <label>Hiển thị sự kiện nổi bật trên trang chủ</label>
                                <input class="form-control" type="checkbox" name="hien_thi_noi_bat" value="1"><br/>
                            </div>
                            <div class="form-group">
                                <label>Duyệt sự kiện</label>
                                <input class="form-control" type="checkbox" name="duyet" value="1"><br/>
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
