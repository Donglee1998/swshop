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
    @if(Session::has('flag'))
        <div class="alert alert-{{Session::get('flag')}}" style="width: 40%; margin: auto auto">
            {{Session::get('message')}}
        </div>
    @endif
<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="height: 750px">
            <div class="carousel-item active">
                <a href="detail_bl.html"><img src="{{asset('/images/item-2.png')}}" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="detail_bl.html"><img src="{{asset('/images/item-1.png')}}" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="detail_bl.html"><img src="{{asset('/images/item-3.png')}}" class="d-block w-100" alt="..."></a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--sản phẩm nổi bật-->
    <div class="container">
        <h3 class="h3 text-center"><b>Sản Phẩm Nổi Bật</b></h3>
        <div class="row">
            @foreach($new_product as $new)
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
        <div style="margin-left: 46%">
        <div>&nbsp;</div>
        <div class="row" align="center">{{$new_product->links()}}</div>
        </div>
    </div>
    <div class="blank"></div>
        <!--Thumnail-->
        <h3 class="h3 text-center"></h3>
        <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <!-- single-banner start -->
                        <div class="single-banner mb-rsp-3">
                            <div class="banner-img">
                                <a href="#"><img class="img-fluid" src="{{asset('/images/nen1.png')}}"
                                                 alt="banner"></a>
                            </div>
                            <div class="banner-content-2">
                                <h3>CHỈ ONLINE</h3>
                                <h2>Sale up to 50%</h2>
                                <h2>Bh cosmetic</h2>
                                <a href="detail_bl.html">Khám phá</a>
                            </div>
                        </div>
                        <!-- single-banner end -->
                    </div>
                    <div class="col-12 col-md-6">
                        <!-- single-banner start -->
                        <div class="single-banner">
                            <div class="banner-img">
                                <a href="#"><img class="img-fluid" src="{{asset('/images/nen2.jpg')}}"
                                                 alt="banner"></a>
                            </div>
                            <div class="banner-content-2">
                                <h3>GOM ORDER</h3>
                                <h2>TRẢ HÀNG BH COSMETIC </h2>
                                <h2>NGÀY 1/12</h2>
                                <a href="#">Tham gia</a>
                            </div>
                        </div>
                        <!-- single-banner end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- banner-area end -->
</div>
<!--post mới nhất-->
<div class="container">
    <div class="blank"></div>
    <h3 class="h3 text-center"><b>Bài Viết Mới Nhất</b></h3>
    <div id="mixedSlider">
        <div class="MS-content">
            <div class="item">
                <div class="imgTitle">
                    <img src="{{asset('/images/new1.jpeg')}}" alt="" />
                </div>
                <small><b>Tin tức</b></small>
                <small>- 1 giờ trước</small>
                <p>Fragile Club – Đồng Phục Cho Hội “Con Tim Mong Manh”</p>
            </div>
            <div class="item">
                <div class="imgTitle">
                    <img src="{{asset('/images/new2.jpeg')}}" alt="" />
                </div>
                <small><b>Tin tức</b></small>
                <small>- 1 giờ trước</small>
                <p>EMPTY – Local Brand với câu chuyện “tắt lo âu, nghe đam mê”</p>
            </div>
            <div class="item">
                <div class="imgTitle">
                    <img src="{{asset('/images/new3.jpeg')}}" alt="" />
                </div>
                <small><b>Tin tức</b></small>
                <small>- 1 giờ trước</small>
                <p>Yacht and Boat Club – Thương Hiệu Thời Trang Của Người Kiến Tạo</p>
            </div>
        </div>
        <div class="MS-controls">
            <button class="MS-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
            <button class="MS-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
        </div>
    </div>


    <div class="section-1-container section-container mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3 section-1-box">
                    <div class="row d-flex justify-content-center ">
                        <div class="col-md-8 text-center">
                            <h3><i class="fas fa-truck"></i></h3>
                            <p>Miễn Phí Vận Chuyển</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 section-1-box">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 text-center">
                            <h3><i class="fas fa-wallet"></i></h3>
                            <p>Ưu Đãi Khủng Mỗi Ngày</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 section-1-box ">
                    <div class="row d-flex justify-content-left">
                        <div class="col-md-8 text-center ">
                            <h3><i class="fas fa-comments"></i></h3>
                            <p>Tổng Đài Hỗ Trợ 24/7</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 section-1-box ">
                    <div class="row d-flex justify-content-left">
                        <div class="col-md-8 text-center ">
                            <h3><i class="fas fa-gift"></i></h3>
                            <p>Tặng Sample Với Mỗi Đơn Hàng</p>
                        </div>
                    </div>
                </div>
            </div>
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
