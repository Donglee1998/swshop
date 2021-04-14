
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
                    <h1 class="jumbotron-heading"><b>SW Shop</b>
                    </h1>
                    <p class="lead text-muted mb-0"> SW Shop là 1 trong những sự lựa chọn hàng đầu về style streetwear dành cho bạn. Chúng tôi xin cam kết đem đến cho bạn những sản phẩm chất lượng nhất.<a class="see-more" href="#"> Buy Now </a></p>
                </div>
            </section>
        </div>
    </div>
</div>

<div class="container">
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="#">Giá giảm dần</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Giá tăng dần</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Ngày ra mắt</a>
        </li>
    </ul>
    <div class="row">
        <div class="col">
            <div class="row">
                @foreach($product as $new)
                    <div class="col-md-3 col-sm-6">

                        <div class="product-grid">
                            <div class="product-image">
                                <a href="{{route('chitietsanpham',$new->id)}}">
                                    <img class="pic-1" src="{{asset('/uploads/'.$new->image)}}">
                                </a>

                                @if($new->promotion_price!=0)
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
                                <h3 class="title"><a href="#">{{$new->name}}</a></h3>
                                @if($new->promotion_price==0)
                                    <div class="price">{{$new->unit_price}}</div>
                                @else
                                    <div class="price">{{$new->promotion_price}}
                                        <span>{{$new->unit_price}}</span>
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
    </div>
<div>&nbsp;</div>
<div class="row" style="margin-left: 53%">{{$product->links()}}</div>
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
