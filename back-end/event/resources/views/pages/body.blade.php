@extends('layouts.index')
@section('content')
<main>
    <section class="home-banner">
        <div class="banner-wrapper">
            <div class="swpier-container slider-bannerHome">
                <div class="swiper-wrapper">
                @foreach($slide as $slide)
                    <div class="swiper-slide">
                        <div class="box-banner">
                            <figure><img class="ofc" src="images/banner/{{$slide->banner}}.png" alt="" srcset="">
                                <figcaption>
                                    <div class="type-of-event">
                                        <h5><span>A . Event</span>| Thể loại sự kiện</h5><span>{{$slide->loai_su_kien}}</span>
                                    </div>
                                    <div class="name-event">
                                        <h5>{{$slide->ten_s_kien}}</h5>
                                    </div>
                                    <div class="decription-event">
                                        <p>{{$slide->tom_tat}}</p>
                                        <p>{{$slide->thoi_gian}} - {{$slide->dia_diem}} (THỜI GIAN)</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="home-about bg-main">
        <div class="container"><a data-fancybox data-width="1000" data-height="800" href="https://youtu.be/JS2kenvaIuo">
                <div class="block-about">
                    <h2 class="text-left wow bounceInUp" data-wow-duration="2s">A . Event - sự kiện của bạn<br><span>niềm vui mọi người</span></h2>
                    <h2 class="text-right wow bounceInUp" data-wow-duration="2s">Chúng tôi là ai ?<br><span>click để hiểu nhau hơn</span></h2>
                </div></a></div>
    </section>
    <section class="hot-event bg-main">
        <div class="container">
            <div class="hotEvent-wrapper">
                <div class="swpier-container slider-hotEvent">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure><img class="ofc" src="images/hot-item/1.png" alt="" srcset="">
                                <figcaption>
                                    <div class="name-event">
                                        <h3>Sky tour 2019</h3>
                                        <h5>Nhận ngay ưu đãi hấp dẫn khi mua vé Sky Tour 2019 trên A.Event</h5>
                                    </div>
                                    <div class="decription-event">
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
                                    </div><a class="right" href="#">Tham Gia</a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <figcaption>
                                    <div class="name-event">
                                        <h3>Shark Tank</h3>
                                        <h5>Cùng tận hưởng trực tiếp các thương vụ vô cùng kịch tính</h5>
                                    </div>
                                    <div class="decription-event">
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
                                        <p class="limit-line">Chương trình truyền hình đầu tư thực tế “Shark Tank Việt Nam - Thương vụ bạc tỷ” đang thu hút sự chú ý từ nhiều bạn trẻ, đặc biệt là các công ty khởi nghiệp (start-up), trong không khí quốc gia cùng khởi nghiệp.</p><a href="#">Tham Gia</a>
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
    <section class="catalog-event bg-main">
        <div class="container">
            <div class="catalog-wrapper">
                <div class="title-catalog"><a href="#"><img class="icon" src="images/icons/add.svg" alt="" srcset=""></a>
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
                        <div class="swiper-slide"><a href="#">
                                <figure>
                                    <div class="box-img">
                                    <img class="ofc" src="images/product/{{$giaitri->banner}}" alt="" srcset="">
                                    </div>
                                    <figcaption>
                                        <h3>{{$giaitri->ten_su_kien}}</h3>
                                        <div class="info-event">
                                            <div class="price">
                                                <h5>Giá:<span>{{$giaitri->gia_ve}} VND</span></h5>
                                            </div>
                                            <div class="address">
                                                <h5>Địa chỉ:<span>{{$giaitri->dia_chi}}</span></h5>
                                            </div>
                                            <div class="time">
                                                <h5>Thời gian:<span>{{$giaitri->ngay_dien_ra}}</span></h5>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure></a>
                        </div>
                    @endforeach



                    </div>
                    <div class="swiper-button-next icon"></div>
                    <div class="swiper-button-prev icon"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="catalog-event bg-main">
        <div class="container">
            <div class="catalog-wrapper">
                <div class="title-catalog"><a href="#"><img class="icon" src="images/icons/add.svg" alt="" srcset=""></a>
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
                        <div class="swiper-slide"><a href="#">
                                <figure>
                                    <div class="box-img">
                                    <img class="ofc" src="images/product/{{$kienthuc->banner}}" alt="" srcset="">
                                    </div>
                                    <figcaption>
                                        <h3>{{$kienthuc->ten_su_kien}}</h3>
                                        <div class="info-event">
                                            <div class="price">
                                                <h5>Giá:<span>{{$kienthuc->gia_ve}} VND</span></h5>
                                            </div>
                                            <div class="address">
                                                <h5>Địa chỉ:<span>{{$kienthuc->dia_chi}}</span></h5>
                                            </div>
                                            <div class="time">
                                                <h5>Thời gian:<span>{{$kienthuc->ngay_dien_ra}}</span></h5>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure></a>
                        </div>
                    @endforeach


                    </div>
                    <div class="swiper-button-next icon"></div>
                    <div class="swiper-button-prev icon"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-news bg-main">
        <div class="container">
            <div class="tab-container">
                <div class="block-title">
                    <h3>Tin tức sự kiện nổi bật</h3>
                    <ul class="list-catalogNews">
                        <li class="item acitve" toggle-for="item-1">LOẠI 1</li>
                        <li class="item" toggle-for="item-2">LOẠI 2</li>
                        <li class="item" toggle-for="item-3">LOẠI 3</li>
                        <li class="item" toggle-for="item-4">LOẠI 4</li>
                        <li class="item" toggle-for="item-5">LOẠI 5</li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="content" tab-id="item-1">
                        <div class="list-news">
                            @foreach($new_01 as $new_01)
                            <div class="item">
                                <figure>
                                    <div class="box-img">
                                    <img class="ofc" src="images/news/{{$new_01->hinh_anh_hien_thi}}" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>{{$new_01->tieu_de}}</h5><span class="time">{{$new_01->ngay_dang}}</span>
                                        <p>{{$new_01->tom_tat}}.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            @endforeach


                    <div class="content" tab-id="item-2">
                        <div class="list-news">
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/7.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/8.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/9.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/10.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/11.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/12.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="content" tab-id="item-3">
                        <div class="list-news">
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/13.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/14.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/15.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/16.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/17.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/18.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="content" tab-id="item-4">
                        <div class="list-news">
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/19.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/20.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/21.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/22.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/23.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/24.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="content" tab-id="item-5">
                        <div class="list-news">
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/28.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/29.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/30.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/31.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/32.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/33.png" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>Sự kiện ra mắt đĩa bay không người lái của VN sản xuất tại trung quốc được tổ chức tại Thái Lan</h5><span class="time">23.10.2018</span>
                                        <p>Cùng Master Event điểm qua những tấm hình ấn tượng của The Music Run qua các năm nhé các bạn.</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
