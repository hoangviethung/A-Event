@extends('layouts.index')
@section('content')
<main>
        <section class="detail-news">
            <div class="container">
                <div class="row">
                    <div class="content-news col-lg-9">
                            {!!htmlspecialchars_decode($new_01->noi_dung)!!}
                    </div>
                    <div class="the-same-news col-lg-3">
                        <div class="list-sanme-news"></div>
                        <div class="item-same-news">
                            <a href="{{url('pages/chitietnew',$new_01->id)}}">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/news/{{$new_01->banner}}" alt="" srcset=""></div>
                                    <figcaption>
                                        <h5>{{$new_01->tieu_de}}</h5>
                                        <span class="time"><?php
                                            $d=strtotime($new_01->created_at);
                                            echo "" . date("d-m-Y", $d);
                                            ?></span>
                                       {!!htmlspecialchars_decode($new_01->noi_dung)!!}
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection