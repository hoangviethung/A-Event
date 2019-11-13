@extends('layouts.index')
@section('content')
	<main>
			<section class="home-banner">
				<div class="banner-wrapper">
					<div class="swpier-container slider-bannerHome">
						<div class="swiper-wrapper">
                            @foreach($slide as $slide)
							    <div class="swiper-slide">
                                    <a href="{{url('pages/chitiet',$slide->id)}}">
									<div class="box-banner">
										<figure><img class="ofc" src="images/product/{{$slide->banner}}" alt="" srcset="">
											<figcaption>
												<div class="type-of-event">
													<h5><span>A . Event</span>| Thể loại sự kiện</h5><span >{{$slide->type_events->ten_loai}}</span>
												</div>
												<div class="name-event">
                                                        <h5>{{$slide->ten_su_kien}}</h5>
												</div>
												<div class="decription-event">
                                                        <p>{{$slide->tom_tat}}</p>
                                                        <p>{{$slide->ngay_dien_ra}} - {{$slide->dia_chi}} (THỜI GIAN)</p>
												</div>
											</figcaption>
										</figure>
									</div></a></div>
                            @endforeach
						</div>
					</div>
				</div>
			</section>
			<section class="home-about">
				<div class="container"><a data-fancybox data-width="1000" data-height="560" href="https://vimeo.com/135446397">
						<div class="block-about">
							<h2 class="text-left wow bounceInUp" data-wow-duration="2s">A . Event - sự kiện của bạn<br><span>niềm vui mọi người</span></h2>
							<h2 class="text-right wow bounceInUp" data-wow-duration="2s">Chúng tôi là ai ?<br><span>click để hiểu nhau hơn</span></h2>
						</div></a></div>
			</section>
			<section class="hot-event">
				<div class="container">
					<div class="hotEvent-wrapper">
						<div class="swpier-container slider-hotEvent">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<figure class="wow fadeInDown" data-wow-delay=".3s"><img class="ofc" src="images/hot-item/1.png" alt="" srcset="">
										<figcaption>
											<div class="name-event wow fadeIn" data-wow-delay=".3s">
												<h3>Sky tour 2019</h3>
												<h5 class="wow fadeIn" data-wow-duration="4s">Nhận ngay ưu đãi hấp dẫn khi mua vé Sky Tour 2019 trên A.Event</h5>
											</div>
											<div class="decription-event wow fadeIn" data-wow-delay=".6s">
												<div class="box-countdown">
													<div class="block">
														<div id="hours">0</div><span>Giờ</span>
													</div>
													<div class="block">
														<div id="minutes">0</div><span>Phút</span>
													</div>
													<div class="block">
														<div id="seconds">0</div><span>Giây</span>
													</div>
													<div class="block"><span>9.9.2019</span></div>
												</div>
												<p class="limit-line">Sky Tour đánh dấu cột mốc mới trong hành trình âm nhạc của Sơn Tùng M-TP trong năm 2019, nối tiếp dự án "Hãy Trao Cho Anh". Nam ca sĩ từng biểu diễn nhiều sân khấu, tổ chức các liveshow bùng nổ nhưng đằng sau mỗi sự bùng cháy đó, anh đều mong muốn mình làm được nhiều hơn thế nữa.</p>
											</div><a class="right wow flipInX" href="chi-tiet-su-kien.html" data-wow-delay=".5s">Tham Gia</a>
										</figcaption>
									</figure>
								</div>
								<div class="swiper-slide">
									<figure class="wow fadeInDown" data-wow-delay=".3s">
										<figcaption>
											<div class="name-event wow fadeIn" data-wow-delay=".3s">
												<h3>Shark Tank</h3>
												<h5>Cùng tận hưởng trực tiếp các thương vụ vô cùng kịch tính</h5>
											</div>
											<div class="decription-event wow fadeIn" data-wow-delay=".6s">
												<div class="box-countdown">
													<div class="block">
														<div id="hours">0</div><span>Giờ</span>
													</div>
													<div class="block">
														<div id="minutes">0</div><span>Phút</span>
													</div>
													<div class="block">
														<div id="seconds">0</div><span>Giây</span>
													</div>
													<div class="block"><span>9.9.2019</span></div>
												</div>
												<p class="limit-line">Chương trình truyền hình đầu tư thực tế “Shark Tank Việt Nam - Thương vụ bạc tỷ” đang thu hút sự chú ý từ nhiều bạn trẻ, đặc biệt là các công ty khởi nghiệp (start-up), trong không khí quốc gia cùng khởi nghiệp.</p><a href="chi-tiet-su-kien.html">Tham Gia</a>
											</div>
										</figcaption><img class="ofc" src="images/hot-item/2.png" alt="" srcset="">
									</figure>
								</div>
							</div>
							<div class="swiper-pagination"></div>
							<div class="swiper-button-next icon"></div>
							<div class="swiper-button-prev icon"></div>
						</div>
					</div>
				</div>
			</section>
			<section class="catalog-event">
				<div class="container">
					<div class="catalog-wrapper">
						<div class="title-catalog wow fadeInLeft" data-wow-delay=".3s"><a href="#"><img class="icon" src="images/icons/add.svg" alt="" srcset=""></a>
							<div class="name-catalog"><span>A . Event - loại sự kiện</span><a href="#">
									<h3>Giải trí</h3></a></div>
							<div class="event-tag">
								<ul class="list-eventTag">
									<li class="item"><a href="#">#eventtag-1</a></li>
									<li class="item"><a href="#">#eventtag-2</a></li>
									<li class="item"><a href="#">#eventtag-3</a></li>
									<li class="item"><a href="#">#eventtag-4</a></li>
								</ul>
							</div>
						</div>
						<div class="swpier-container slider-ProductByCatalog">
							<div class="swiper-wrapper">
                        @foreach($giaitri as $giaitri)
								<div class="swiper-slide">
                                    <a href="{{url('pages/chitiet',$giaitri->id)}}">
										<div class="item-event">
											<figure>
												<div class="box-img"><img class="ofc" src="images/product/{{$giaitri->banner}}" alt="" srcset=""></div>
												<figcaption>
													<h3>{{$giaitri ->ten_su_kien}}</h3>
													<div class="info-event">
														<div class="item">
															<h5>Từ:<span>{{number_format($giaitri->gia_ve)}} VNĐ</span></h5>
														</div>
														<div class="item">
															<h5>Địa chỉ:<span>{{$giaitri->dia_chi}}</span></h5>
														</div>
														<div class="item">
															<h5>Thời gian:<span>{{$giaitri->ngay_dien_ra}}</span></h5>
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

							<div class="swiper-button-next icon"></div>
							<div class="swiper-button-prev icon"></div>
						</div>
					</div>
				</div>
			</section>
			<section class="catalog-event">
				<div class="container">
					<div class="catalog-wrapper">
						<div class="title-catalog wow fadeInLeft" data-wow-delay=".3s"><a href="#"><img class="icon" src="images/icons/add.svg" alt="" srcset=""></a>
							<div class="name-catalog"><span>A . Event - loại sự kiện</span><a href="#">
									<h3>Kiến thức</h3></a></div>
							<div class="event-tag">
								<ul class="list-eventTag">
									<li class="item"><a href="#">#eventtag-1</a></li>
									<li class="item"><a href="#">#eventtag-2</a></li>
									<li class="item"><a href="#">#eventtag-3</a></li>
									<li class="item"><a href="#">#eventtag-4</a></li>
								</ul>
							</div>
						</div>
						<div class="swpier-container slider-ProductByCatalog">
							<div class="swiper-wrapper">
                            @foreach($kienthuc as $kienthuc)
								<div class="swiper-slide">
                                    <a href="{{url('pages/chitiet',$kienthuc->id)}}">
										<div class="item-event">
											<figure>
												<div class="box-img"><img class="ofc" src="images/product/{{$kienthuc->banner}}" alt="" srcset=""></div>
												<figcaption>
													<h3>{{$kienthuc->ten_su_kien}}</h3>
													<div class="info-event">
														<div class="item">
															<h5>Từ:<span>{{number_format($kienthuc->gia_ve)}} VND</span></h5>
														</div>
														<div class="item">
															<h5>Địa chỉ:<span>{{$kienthuc->dia_chi}}</span></h5>
														</div>
														<div class="item">
															<h5>Thời gian:<span>{{$kienthuc->ngay_dien_ra}}</span></h5>
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
							<div class="swiper-button-next icon"></div>
							<div class="swiper-button-prev icon"></div>
						</div>
					</div>
				</div>
			</section>
			<section class="catalog-event">
				<div class="container">
					<div class="catalog-wrapper">
						<div class="title-catalog wow fadeInLeft" data-wow-delay=".3s"><a href="#"><img class="icon" src="images/icons/add.svg" alt="" srcset=""></a>
							<div class="name-catalog"><span>A . Event - loại sự kiện</span><a href="#">
									<h3>Sự kiện khác</h3></a></div>
							<div class="event-tag">
								<ul class="list-eventTag">
									<li class="item"><a href="#">#eventtag-1</a></li>
									<li class="item"><a href="#">#eventtag-2</a></li>
									<li class="item"><a href="#">#eventtag-3</a></li>
									<li class="item"><a href="#">#eventtag-4</a></li>
								</ul>
							</div>
						</div>
						<div class="swpier-container slider-ProductByCatalog">
							<div class="swiper-wrapper">
                            @foreach($sukienkhac as $sukienkhac)
								<div class="swiper-slide">
                                    <a href="{{url('pages/chitiet',$sukienkhac->id)}}">
										<div class="item-event">
											<figure>
												<div class="box-img"><img class="ofc" src="images/product/{{$sukienkhac->banner}}" alt="" srcset=""></div>
												<figcaption>
													<h3>{{$sukienkhac->ten_su_kien}}</h3>
													<div class="info-event">
														<div class="item">
															<h5>Từ:<span>{{number_format($sukienkhac->gia_ve)}} VND</span></h5>
														</div>
														<div class="item">
															<h5>Địa chỉ:<span>{{$sukienkhac->dia_chi}}</span></h5>
														</div>
														<div class="item">
															<h5>Thời gian:<span>{{$sukienkhac->ngay_dien_ra}}</span></h5>
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
							<div class="swiper-button-next icon"></div>
							<div class="swiper-button-prev icon"></div>
						</div>
					</div>
				</div>
			</section>
			<section class="home-news">
				<div class="container">
					<div class="tab-container">
						<div class="title-catalog wow fadeInLeft" data-wow-delay=".3s"><a href="#"><img class="icon" src="images/icons/add.svg" alt="" srcset=""></a>
							<div class="name-catalog"><span>A . Event - News</span><a href="#">
									<h3>Tin Tức</h3></a></div>
						</div>
						<ul class="list-catalogNews">
							<li class="item acitve" toggle-for="item-1">NỔI BẬT</li>
							<li class="item" toggle-for="item-2">MỚI</li>
							<li class="item" toggle-for="item-3">GIẢI TRÍ</li>
							<li class="item" toggle-for="item-4">HỌC HỎI</li>
							<li class="item" toggle-for="item-5">CÁC LĨNH VỰC KHÁC</li>
						</ul>
						<div class="tab-content">
							<div class="content wow fadeIn" tab-id="item-1" data-wow-delay=".3s">
								<div class="list-news">
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/1.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Cùng Master Event Điểm Qua Một Khoảng Khắc Thú Vị Tại Sự Kiễn Lễ Hộ Sắc Màu</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/2.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Cùng Master Event Điểm Qua Một Khoảng Khắc Thú Vị Tại Sự Kiễn Lễ Hộ Sắc Màu</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/3.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Cùng Master Event Điểm Qua Một Khoảng Khắc Thú Vị Tại Sự Kiễn Lễ Hộ Sắc Màu</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/4.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Cùng Master Event Điểm Qua Một Khoảng Khắc Thú Vị Tại Sự Kiễn Lễ Hộ Sắc Màu</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/5.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Cùng Master Event Điểm Qua Một Khoảng Khắc Thú Vị Tại Sự Kiễn Lễ Hộ Sắc Màu</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/6.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Cùng Master Event Điểm Qua Một Khoảng Khắc Thú Vị Tại Sự Kiễn Lễ Hộ Sắc Màu</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
								</div>
							</div>
							<div class="content wow fadeIn" tab-id="item-2" data-wow-delay=".3s">
								<div class="list-news">
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/7.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/8.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/9.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/10.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/11.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/12.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
								</div>
							</div>
							<div class="content wow fadeIn" tab-id="item-3" data-wow-delay=".3s">
								<div class="list-news">
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/13.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/14.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/15.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/16.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/17.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/18.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
								</div>
							</div>
							<div class="content wow fadeIn" tab-id="item-4" data-wow-delay=".3s">
								<div class="list-news">
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/19.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/20.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/21.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/22.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/23.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/24.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
								</div>
							</div>
							<div class="content wow fadeIn" tab-id="item-5" data-wow-delay=".3s">
								<div class="list-news">
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/28.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/29.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/30.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/31.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/32.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
									<div class="item-news"><a href="chi-tiet-tin-tuc.html">
											<figure>
												<div class="box-img"><img class="ofc" src="images/news/33.png" alt="" srcset=""></div>
												<figcaption>
													<h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
													<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
												</figcaption>
											</figure></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="clients-partner">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 left-item wow fadeIn" data-wow-delay=".3s">
							<figure><a href="index.html"><img src="images/logo.png" alt=""></a>
								<figcaption>
									<h3>A Event là gì ???</h3>
									<p>A Event là hệ thống quản lý và phân phối vé trực tuyến, giúp việc mua bán vé sự kiện của bạn thật tiện lợi và dễ dàng.</p>
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-8 right-item">
							<div class="tab-container">
								<ul class="list-tab">
									<li class="item wow fadeInLeft acitve" data-wow-delay=".3s" toggle-for="item-1">ĐỐI TÁC TIÊU BIỂU</li>
									<li class="item wow fadeInLeft" data-wow-delay=".6s" toggle-for="item-2">KHÁCH HÀNG TIÊU BIỂU</li>
									<li class="item wow fadeInLeft" data-wow-delay=".9s" toggle-for="item-3">NHẬN XÉT CỦA ĐỐI TÁC</li>
								</ul>
								<div class="tab-content">
									<div class="content" tab-id="item-1">
										<div class="list-img">
											<div class="item"><a href="https://asialive365.com/"><img src="images/clients-partner/doi-tac-1.png" alt="" srcset=""></a></div>
											<div class="item"><a href="https://asialive365.com/"><img src="images/clients-partner/doi-tac-2.png" alt="" srcset=""></a></div>
											<div class="item"><a href="https://asialive365.com/"><img src="images/clients-partner/doi-tac-3.png" alt="" srcset=""></a></div>
											<div class="item"><a href="https://asialive365.com/"><img src="images/clients-partner/doi-tac-4.png" alt="" srcset=""></a></div>
										</div>
									</div>
									<div class="content" tab-id="item-2">
										<div class="list-img">
											<div class="item"><a href="http://mtvwe.com/"><img src="images/clients-partner/khach-hang-1.png" alt=""></a></div>
											<div class="item"><a href="http://mtvwe.com/"><img src="images/clients-partner/khach-hang-2.png" alt=""></a></div>
											<div class="item"><a href="http://mtvwe.com/"><img src="images/clients-partner/khach-hang-3.png" alt=""></a></div>
											<div class="item"><a href="http://mtvwe.com/"><img src="images/clients-partner/khach-hang-4.png" alt=""></a></div>
											<div class="item"><a href="http://mtvwe.com/"><img src="images/clients-partner/khach-hang-5.png" alt=""></a></div>
											<div class="item"><a href="http://mtvwe.com/"><img src="images/clients-partner/khach-hang-6.png" alt=""></a></div>
											<div class="item"><a href="http://mtvwe.com/"><img src="images/clients-partner/khach-hang-7.png" alt=""></a></div>
											<div class="item"><a href="http://mtvwe.com/"><img src="images/clients-partner/khach-hang-8.png" alt=""></a></div>
											<div class="item"><a href="http://mtvwe.com/"><img src="images/clients-partner/khach-hang-9.png" alt=""></a></div>
											<div class="item"><a href="http://mtvwe.com/"><img src="images/clients-partner/khach-hang-10.png" alt=""></a></div>
											<div class="item"><a href="http://mtvwe.com/"><img src="images/clients-partner/khach-hang-11.png" alt=""></a></div>
											<div class="item"><a href="http://mtvwe.com/"><img src="images/clients-partner/khach-hang-12.png" alt=""></a></div>
											<div class="item"><a href="http://mtvwe.com/"><img src="images/clients-partner/khach-hang-13.png" alt=""></a></div>
											<div class="item"><a href="http://mtvwe.com/"><img src="images/clients-partner/khach-hang-14.png" alt=""></a></div>
										</div>
									</div>
									<div class="content" tab-id="item-3">
										<p>NHẬN XÉT CỦA KHÁCH HÀNG</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
@endsection
