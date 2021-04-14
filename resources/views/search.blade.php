@extends('master')
@section('link')
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/blogcarousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/section1.css')}}">
@endsection
@section('Noidung')

<div class="container">
    <div class="row">
        <div class="col">
            <section class="jumbotron text-left">
                <div class="container">
                    <h1 class="jumbotron-heading"><b>Tìm Kiếm</b>
                    </h1>
                    <p class="lead text-muted mb-0">{{count($search_product)}} sản phẩm được tìm thấy
                    </p>
                </div>
            </section>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="row">
                @foreach($search_product as $search)
                    <div class="col-md-4 col-sm-6">

                        <div class="product-grid">
                            <div class="product-image">
                                <a href="{{route('chitietsanpham',$search->id)}}">
                                    <img class="pic-1" src="{{asset('/uploads/'.$search->image)}}">
                                </a>
                                <ul class="social">
                                    <li><a href=""><i class="far fa-eye"></i></a></li>
                                    <li><a href=""><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="{{route('themgiohang',$search->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                @if($search->promotion_price!=0)
                                    <span class="product-new-label">Giảm Giá</span>
                                @endif
                            </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star disable"></li>
                                <div>&nbsp;</div>
                            </ul>
                            <div class="product-content">
                                <h3 class="title"><a href="#">{{$search->name}}</a></h3>
                                @if($search->promotion_price==0)
                                    <div class="price">{{$search->unit_price}}</div>
                                @else
                                    <div class="price">{{$search->unit_price}}
                                        <span>{{$search->promotion_price}}</span>
                                    </div>
                                @endif
                                <div>&nbsp;</div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
</div>


    @endsection
    @section('script')
        <script>
            $('#mixedSlider').multislider({
                duration: 750,
                interval: 2000
            });
        </script>
        <script>
            $(document).ready(function () {
                "use strict";
                $('.menu > ul > li:has(ul)').addClass('menu-dropdown-icon');
                $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
                $(".menu > ul").before("<a href=\"#\" class=\"menu-mobile\">&nbsp;</a>");
                $(".menu > ul > li").hover(function (e) {
                    if ($(window).width() > 943) {
                        $(this).children("ul").stop(true, false).fadeToggle(150);
                        e.preventDefault();
                    }
                });
                $(".menu > ul > li").click(function () {
                    if ($(window).width() <= 943) {
                        $(this).children("ul").fadeToggle(150);
                    }
                });
                $(".menu-mobile").click(function (e) {
                    $(".menu > ul").toggleClass('show-on-mobile');
                    e.preventDefault();
                });
            });
            $(window).resize(function () {
                $(".menu > ul > li").children("ul").hide();
                $(".menu > ul").removeClass('show-on-mobile');
            });
        </script>
        <script>
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <script>
            function openSearch() {
                document.getElementById("myOverlay").style.display = "block";
            }

            function closeSearch() {
                document.getElementById("myOverlay").style.display = "none";
            }
        </script>
@endsection

