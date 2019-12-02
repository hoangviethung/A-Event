@extends('admin.layouts.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
            <div class="container-fluid">
                 
                <div class="row">
                        @if(session('thongbao'))
                        <div class="alert alert-success" style="width: 50% !important">
                             {{session('thongbao')}}
                        </div>
                        @endif
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Gửi Email
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/seenmail/postmail" method="POST" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <label>Tên sự kiện</label>
                                <input class="form-control" name="ten_su_kien" placeholder="Nhập tên sự kiện"/>
                                @if($errors->has('ten_su_kien'))
                                    <span style="color: red; text-align: left;font-size: 14px;font-weight: bold;">
                                        {{$errors->first('ten_su_kien')}}
                                    </span>
                                @endif 
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nhập email khách hàng</label>
                                        <input class="form-control" name="email" placeholder="Nhập email khách hàng"/>
                                        @if($errors->has('email'))
                                            <span style="color: red; text-align: left;font-size: 14px;font-weight: bold;">
                                                {{$errors->first('email')}}
                                            </span>
                                        @endif 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nhập email chủ event</label>
                                        <input class="form-control" name="emailc" placeholder="Nhập email chủ event"/>
                                        @if($errors->has('emailc'))
                                            <span style="color: red; text-align: left;font-size: 14px;font-weight: bold;">
                                                {{$errors->first('emailc')}}
                                            </span>
                                        @endif 
                                    </div>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label>Tên khách hàng</label>
                                <input class="form-control" name="ten_khach_hang" placeholder="Nhập tên khách hàng"/>
                                @if($errors->has('ten_khach_hang'))
                                    <span style="color: red; text-align: left;font-size: 14px;font-weight: bold;">
                                        {{$errors->first('ten_khach_hang')}}
                                    </span>
                                 @endif 
                            </div>
                            <div class="form-group">
                                <label>Số vé</label>
                                <input class="form-control" name="so_ve" type="number" placeholder="Nhập số vé"/>
                                @if($errors->has('so_ve'))
                                <span style="color: red; text-align: left;font-size: 14px;font-weight: bold;">
                                    {{$errors->first('so_ve')}}
                                </span>
                             @endif
                            </div>
                            <div class="form-group">
                                <label>Chỗ ngồi</label>
                                <input class="form-control" name="cho_ngoi" type="text" placeholder="Nhập chỗ ngồi"/>
                                @if($errors->has('cho_ngoi'))
                                <span style="color: red; text-align: left;font-size: 14px;font-weight: bold;">
                                    {{$errors->first('cho_ngoi')}}
                                </span>
                             @endif
                            </div>
                            <button type="submit" class="btn btn-default">Gửi</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#editor1' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
