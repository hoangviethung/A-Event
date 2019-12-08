@extends('layouts.index')
@section('content')
<main>
			<section class="detail-news">
				<div class="container">
					<div class="row">
						<div class="content-news col-lg-9">
                        {!!htmlspecialchars_decode($chitiet->noi_dung)!!}
						</div>
						<div class="the-same-news col-lg-3">
                            <div class="list-sanme-news"></div>
                            @foreach($tinlienquan as $tinlienquan)
							<div class="item-same-news"><a href="">
									<figure>
										<div class="box-img"><img class="ofc" src="./images/news/1.png" alt="" srcset=""></div>
										<figcaption>
											<h5>Cùng Master Event Điểm Qua Một Khoảng Khắc Thú Vị Tại Sự Kiễn Lễ Hộ Sắc Màu</h5><span class="time">23.10.2018</span>
											<p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
										</figcaption>
                                    </figure></a>
                                </div>
                            @endforeach
						</div>
					</div>
				</div>
			</section>
		</main>




@endsection
