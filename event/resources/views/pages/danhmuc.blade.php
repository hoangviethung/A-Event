@extends('layouts.index')
@section('content')
	<main>
				<section class="list-product">
					<div class="banner-search">
						<figure><img class="ofc" src="./images/banner/search-banner.png" alt=""></figure>
						<form action="pages/danhmuc/{{$id}}" method="POST" autocomplete="off">
							@csrf
							<div class="form-group">
								<input type="text" placeholder="Tìm sự kiện, khóa học, khu vui chơi..." name="timkiem">
							</div>
						</form>
					</div>
					<div class="box-filter">
						<div class="container">
							<form action="#">
								<div class="form-row no-gutters">
									<div class="form-group col-lg-3">
										<select name="">
											<option value="">Tất cả địa điểm</option>
											<option value="">Hồ Chí Minh</option>
											<option value="">Hà Nội</option>
											<option value="">Các địa điểm khác</option>
										</select>
									</div>
									<div class="form-group col-lg-3">
										<select name="">
											<option>-- Thể loại sự kiện --</option>
											<optgroup label="Giải trí">
												<option>Thể loại 1</option>
												<option>Thể loại 2</option>
												<option>Thể loại 3</option>
												<option>Thể loại 4</option>
												<option>Thể loại 5</option>
												<option>Thể loại 6</option>
											</optgroup>
											<optgroup label="Học Tập">
												<option>Thể loại 1</option>
												<option>Thể loại 2</option>
												<option>Thể loại 3</option>
												<option>Thể loại 4</option>
												<option>Thể loại 5</option>
												<option>Thể loại 6</option>
											</optgroup>
											<optgroup label="Khác">
												<option>Thể loại 1</option>
												<option>Thể loại 2</option>
												<option>Thể loại 3</option>
												<option>Thể loại 4</option>
												<option>Thể loại 5</option>
												<option>Thể loại 6</option>
											</optgroup>
										</select>
									</div>
									<div class="form-group col-lg-3">
										<select name="">
											<option>Tất cả các ngày sắp tới</option>
											<option>Hôm nay</option>
											<option>Ngày mai</option>
											<option>Tuần này</option>
										</select>
									</div>
									<div class="form-group col-lg-3">
										<select name="">
											<option>Tất cả giá vé</option>
											<option>Miễn phí</option>
											<option>Có phí</option>
										</select>
									</div>
								</div>
							</form>
						</div>
					</div>
					<h1>{{$danhmuc->ten_loai}}</h1>
					<div class="list-item">
						<div class="container">
							<div class="row">
								@foreach($sukien as $sukien)
								<div class="col-lg-4"><a href="chi-tiet-su-kien.html">
										<div class="item-event">
											<figure>
												<div class="box-img"><img class="ofc" src="./images/product/{{$sukien->banner}}" alt="" srcset=""></div>
												<figcaption>
													<h3>{{$sukien->ten_su_kien}}</h3>
													<div class="info-event">
														<div class="item">
															<h5>Từ:<span>{{$sukien->gia_ve}}</span></h5>
														</div>
														<div class="item">
															<h5>Địa chỉ:<span>{{$sukien->dia_chi}}</span></h5>
														</div>
														<div class="item">
															<h5>Thời gian:<span>{{$sukien->ngay_dien_ra}}</span></h5>
														</div>
														<div class="item">
															<h5>Trạng thái:<span>Mở bán</span></h5>
														</div>
													</div>
												</figcaption>
											</figure>
										</div>
									</a>
								</div>
								@endforeach

							</div>
						</div>
					</div>


				</section>
	</main>
@endsection
