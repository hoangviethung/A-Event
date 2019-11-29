@extends('admin.layouts.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Sửa sự kiện : {{$event -> ten_su_kien}}
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
                        <form action="admin/event/sua/{{$event->id}}" method="POST" enctype="multipart/form-data" >
                            <!-- để truyền dữ liệu phải cho nó 1 cái token -->
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Tên sự kiện</label>
                                <input class="form-control" name="ten_su_kien" value="{{$event->ten_su_kien}}" placeholder="Nhập tên sự kiện"/>
                            </div>
                            <div class="form-group">
                                <label>Nhà tài trợ</label>
                                <input class="form-control" name="nha_tai_tro" value="{{$event->nha_tai_tro}}" placeholder="Nhà tài trợ"/>
                            </div>
                            <div class="form-group">
                                <label>Logo sự kiện</label>
                                <p>
                                <img width="100px" src="images/logo/{{$event->logo}}">
                                </p>
                                <p>{{$event->logo}}</p>
                                <input class="form-control" name="logo" id="" type="file"/>
                            </div>

                            <div class="form-group">
                                <label>Thể loại sự kiện</label>
                                <select class="form-control" name="id_loai" >
                                        @foreach($danhmuc as $danhmuc)

                                            <option
                                                    @if( $event->id_loai == $danhmuc->id )
                                                        {{"selected"}}
                                                    @endif

                                            value="{{$danhmuc->id}}">{{$danhmuc->ten_loai}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                            @if(session('loi'))
                                <div class="alert alert-danger">
                                    {{session('loi')}}
                                </div>
                            @endif
                                <label>Ảnh Banner của sự kiện</label>
                                <p>
                                <img width="200px" src="images/product/{{$event->banner}}">
                                </p>
                                <p>{{$event->banner}}</p>
                                <input class="form-control" name="banner" id="" type="file"/>
                            </div>
                            <div class="form-group">
                                <label>Ngày diễn ra sự kiện</label>
                                <input class="form-control" name="ngay_dien_ra" value="{{$event->ngay_dien_ra}}" type="date"/>
                            </div>
                            <div class="form-group">
                                <label>Giờ diễn ra sự kiện</label>
                                <input class="form-control" name="thoi_gian" value="{{$event->thoi_gian}}" type="time"/>
                            </div>
                            <div class="form-group">
                                <label>Ngày bán vé</label>
                                <input class="form-control" name="ngay_ban" value="{{$event->ngay_ban}}" type="datetime"/>
                            </div>
                            <div class="form-group">
                                <label>Vị trí ngồi của vé thường</label>
                                <input class="form-control" name="vi_tri_ve_thuong" value="{{$event->vi_tri_ve_thuong}}" type="datetime"/>
                            </div>
                            <div class="form-group">
                                <label>Quà tặng khi mua vé thường</label>
                                <input class="form-control" name="qua_tang_thuong" value="{{$event->qua_tang_thuong}}" type="datetime"/>
                            </div>
                            <div class="form-group">
                                <label>Giá vé thường</label>
                                <input class="form-control" name="gia_ve"  value="{{$event->gia_ve}}" type="number"/>
                            </div>
                            <div class="form-group">
                                <label>Vị trí ngồi của vé VIP</label>
                                <input class="form-control" name="vi_tri_ve_vip" value="{{$event->vi_tri_ve_vip}}" type="datetime"/>
                            </div>
                            <div class="form-group">
                                <label>Quà tặng khi mua vé VIP</label>
                                <input class="form-control" name="qua_tang_vip" value="{{$event->qua_tang_vip}}" type="datetime"/>
                            </div>
                            <div class="form-group">
                                <label>Giá vé VIP</label>
                                <input class="form-control" name="gia_ve"  value="{{$event->gia_ve_vip}}" type="number"/>
                            </div>
                            <div class="form-group">
                                <label>Số lượng vé thường</label>
                                <input class="form-control" name="so_luong_ve_thuong" value="{{$event->so_luong_ve_thuong}}" type="text"/>
                            </div>
                            <div class="form-group">
                                <label>Số lượng vé vip</label>
                                <input class="form-control" name="so_luong_ve_vip" value="{{$event->so_luong_ve_vip}}" type="text"/>
                            </div>
                            <div class="form-group">
                                <label>Nơi diễn ra sự kiện</label>
                                <input class="form-control" value="{{$event->dia_chi}}" name="dia_chi" type="text"/>
                            </div>
                            <div class="form-group" style="width: 150%">
                                <label>Tóm tắt sự kiện ( Hiển thị trên Slider, Sự kiện nổi bật)</label>
                                <textarea class="form-control ckeditor" id="editor1" rows="2" cols="20" value="" name="tom_tat">{{$event->tom_tat}}</textarea>
                            </div>
                            <div class="form-group" style="width: 150%">
                                <label>Mô tả sự kiện</label>
                                <textarea class="form-control ckeditor" id="editor" srows="7" cols="20" name="mo_ta" value="" >{{$event->mo_ta}}</textarea>
                            </div>



                            <div class="form-group">
                                <label>Hiển thị sự kiện trên Slider </label>
                                <label class="radio-inline">

                                <input name="hien_thi_slider" value="0" type="radio"
                                @if($event->hien_thi_slider ==0)
                                    {{"checked"}}
                                    @endif
                                            >Không


                                </label>
                                <label class="radio-inline">
                                <input name="hien_thi_slider"
                                @if($event->hien_thi_slider ==1)
                                    {{"checked"}}
                                    @endif
                                    value="1" type="radio" >Có
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Hiển thị sự kiện nổi bật </label>
                                <label class="radio-inline">
                                <input name="hien_thi_noi_bat" value="0" type="radio"
                                @if($event->hien_thi_noi_bat ==0)
                                    {{"checked"}}
                                    @endif

                                >Không
                                </label>
                                <label class="radio-inline">
                                <input name="hien_thi_noi_bat" value="1"
                                @if($event->hien_thi_noi_bat ==1)
                                    {{"checked"}}
                                    @endif
                                type="radio" >Có
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Duyệt bài </label>
                                <label class="radio-inline">
                                <input name="duyet" value="0" type="radio"
                                @if($event->duyet ==0)
                                    {{"checked"}}
                                    @endif
                                 checked="">Không
                                </label>
                                <label class="radio-inline">
                                <input name="duyet" value="1"
                                @if($event->duyet ==1)
                                    {{"checked"}}
                                    @endif
                                type="radio" >Có
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
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
