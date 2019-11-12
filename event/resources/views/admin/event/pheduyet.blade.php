@extends('admin.layouts.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <table witdh="100%">
                        <tr>
                            <td width="50%">
                            <h1 class="page-header">
                            {{$duyet->ten_su_kien}}
                             </h1>
                            </td>
                            <td width="50%" style="text-align: right">
                            <img width="50px" height="50" src="images/logo/{{$duyet->logo}}">
                            </td>
                        </tr>
                    </table>

                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                        <form action="admin/event/pheduyet/{{$duyet->id}}" method="POST" enctype="multipart/form-data" >
                            <!-- để truyền dữ liệu phải cho nó 1 cái token -->
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Thể loại sự kiện</label>
                                <select class="form-control" name="id_loai" readonly>
                                        @foreach($danhmuc as $danhmuc)

                                            <option class="form-control"
                                                    @if( $duyet->id_loai == $danhmuc->id )
                                                        {{"selected"}}
                                                    @endif

                                            value="{{$danhmuc->id}}" readonly>{{$danhmuc->ten_loai}}</option>

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
                                <img width="200px" src="images/product/{{$duyet->banner}}">
                                </p>
                                <p>{{$duyet->banner}}</p>
                            </div>
                            <div class="form-group">
                                <label>Ngày diễn ra sự kiện</label>
                                <input class="form-control" name="ngay_dien_ra" value="{{$duyet->ngay_dien_ra}}" type="datetime" readonly/>
                            </div>
                            <div class="form-group">
                                <label>Ngày bán vé</label>
                                <input class="form-control" name="ngay_ban" value="{{$duyet->ngay_ban}}" type="datetime" readonly/>
                            </div>
                            <div class="form-group">
                                <label>Giá vé</label>
                                <input class="form-control" name="gia_ve" value="{{$duyet->gia_ve}}" type="text" readonly />
                            </div>
                            <div class="form-group">
                                <label>Số lượng vé</label>
                                <input class="form-control" name="so_luong_ve" value="{{$duyet->so_luong_ve}}" type="text" readonly/>
                            </div>
                            <div class="form-group">
                                <label>Nơi diễn ra sự kiện</label>
                                <input class="form-control" value="{{$duyet->dia_chi}}" name="dia_chi" type="text" readonly/>
                            </div>
                            <div class="form-group" style="width: 150%">
                                <label>Tóm tắt sự kiện ( Hiển thị trên Slider, Sự kiện nổi bật)</label>
                                <textarea class="form-control ckeditor" id="editor1" rows="2" cols="20" value="" name="tom_tat" readonly>{{$duyet->tom_tat}}</textarea>
                            </div>
                            <div class="form-group" style="width: 150%">
                                <label>Mô tả sự kiện</label>
                                <textarea class="form-control ckeditor" id="editor" srows="7" cols="20" name="mo_ta" value="" readonly>{{$duyet->mo_ta}}</textarea>
                            </div>



                            <div class="form-group">
                                <label>Hiển thị sự kiện trên Slider </label>
                                <label class="radio-inline">

                                <input name="hien_thi_slider" value="0" type="radio"
                                @if($duyet->hien_thi_slider ==0)
                                    {{"checked"}}
                                    @endif
                                            >Không


                                </label>
                                <label class="radio-inline">
                                <input name="hien_thi_slider"
                                @if($duyet->hien_thi_slider ==1)
                                    {{"checked"}}
                                    @endif
                                    value="1" type="radio" >Có
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Hiển thị sự kiện nổi bật </label>
                                <label class="radio-inline">
                                <input name="hien_thi_noi_bat" value="0" type="radio"
                                @if($duyet->hien_thi_noi_bat ==0)
                                    {{"checked"}}
                                    @endif

                                >Không
                                </label>
                                <label class="radio-inline">
                                <input name="hien_thi_noi_bat" value="1"
                                @if($duyet->hien_thi_noi_bat ==1)
                                    {{"checked"}}
                                    @endif
                                type="radio" >Có
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Duyệt bài </label>
                                <label class="radio-inline">
                                <input name="duyet" value="0" type="radio"
                                @if($duyet->duyet ==0)
                                    {{"checked"}}
                                    @endif
                                 checked="">Không
                                </label>
                                <label class="radio-inline">
                                <input name="duyet" value="1"
                                @if($duyet->duyet ==1)
                                    {{"checked"}}
                                    @endif
                                type="radio" >Có
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">DUYỆT BÀI</button>
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
