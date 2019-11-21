@extends('layouts.index')
@section('content')

<main>
			<section class="product-detail">
				<div class="banner-event">
					<figure><img class="ofc" src="./images/product/{{$chitiet->banner}}" alt="" srcset=""></figure>
				</div>
				<div class="main-intro">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="overview">
									<h1 class="wow fadeInLeft" data-wow-delay=".3s">{{$chitiet->ten_su_kien}}</h1>
									<div class="item time wow fadeInLeft" data-wow-delay=".6s">{{$chitiet->ngay_dien_ra}}</div>
									<div class="item address wow fadeInLeft" data-wow-delay=".9s">{{$chitiet->dia_chi}}</div>
								</div>
								<div class="details-event">
									<div class="desc">
										<div class="title">GIỚI THIỆU</div>
										<div class="CKEditor">
											{!!htmlspecialchars_decode($chitiet->mo_ta)!!}
										</div>

									</div>
									<div class="ticket-booking">
										<div class="title">THÔNG TIN VÉ</div>
										<div class="list-ticket wow fadeInDown" data-wow-delay=".3s">
											<div class="item">
												<div class="name">HẠNG THƯỜNG</div>
												<div class="price">{{number_format($chitiet->gia_ve)}} VNĐ </div>
												<div class="info-ticket">
													<p>Vị trí:<span>{{$chitiet->vi_tri_ve_thuong}}</span></p>
													<p> Quà tặng (sẽ nhận tại sự kiện):<span>{{$chitiet->qua_tang_thuong}}</span></p>
													<p>Lưu ý:<span>Trên mỗi đơn hàng, quý khách được đặt tối đa 2 vé</span></p>
												</div>
											</div>
											<div class="item">
												<div class="name">HẠNG VIP</div>
												<div class="price">{{number_format($chitiet->gia_ve_vip)}} VND</div>
												<div class="info-ticket">
													<p>Vị trí:<span>{{$chitiet->vi_tri_ve_vip}}</span></p>
													<p> Quà tặng (sẽ nhận tại sự kiện):<span>{{$chitiet->qua_tang_vip}}</span></p>
													<p>Lưu ý:<span>Trên mỗi đơn hàng, quý khách được đặt tối đa 2 vé</span></p>
												</div>
											</div>
										
										</div>
                                    </div>
                                    <div class="gmap">
										<div class="title">BẢN ĐỒ</div>
										<div class="google-map">
											<div id="map"></div>
										</div>
										<script>
											var locationsObject = {
												inputLocations : [
													{
														lat: 10.807100,
														lng: 106.661638,
														name: 'Ho Chi Minh Headoffice',
														icon: "./images/icons/gmap.svg",
														address: 'Floor 4, Thang Long Building, 29 Thang Long St., Ward 4,  Tan Binh Dist., HCMC, Vietnam.',
														hotLine: '(+84) 903 910 430 - Mr.Linh',
														phone: '(84.28) 3848 7858',
														fax: '(84.28) 3848 7858',
														email: 'npv-saleadmin@npvexpress.com',
														website: 'www.npvexpress.com',
														optimized: false
													}
												],
											}
										</script>
									</div>
									<div class="organizer">
										<div class="title">NHÀ TỔ CHỨC</div>
										<div class="content wow fadeInDown" data-wow-delay=".3s">
											<div class="org-img"><img class="ofc" src="./images/product/{{$chitiet->logo}}.png" alt="" srcset=""></div>
											<div class="desc">
												<p>{{$chitiet->nha_tai_tro}} tổ chức chương trình.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 aside-boxing">
								<div class="box-booking"><a class="btn wow flipInX" href="{{ url('pages/bookingone',$chitiet->id) }}" data-wow-delay=".5s">MUA VÉ NGAY</a>
									<div class="overview">
										<h1>{{$chitiet->ten_su_kien}}</h1>
										<div class="item time">{{$chitiet->ngay_dien_ra}} | {{$chitiet->thoi_gian}}</div>
										<div class="item address">{{$chitiet->dia_chi}}</div>
										<div class="item price">Từ {{number_format($chitiet->gia_ve)}} VNĐ</div>
									</div>
									<div class="facebook-button">
										<div class="item">
											<div class="button fb-share-button" data-href="https://aevent.web404.xyz/" data-layout="button" data-size="large"></div><a class="fb-xfbml-parse-ignore" target="_blank" href="https://aevent.web404.xyz/"></a>
										</div>
										<div class="item">
											<div class="button fb-save" data-uri="https://www.instagram.com/facebook/" data-size="large"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
			</section>
		</main>


@endsection
