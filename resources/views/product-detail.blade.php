@extends('master')
@section('link')

    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">

    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">

    <link rel="stylesheet" href="{{asset('css/section1.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/product.css')}}">

    <!--Other-->

@endsection
@section('Noidung')
    @if(Session::has('flag'))
        <div class="alert alert-{{Session::get('flag')}}" style="width: 40%; margin: auto auto">
            {{Session::get('message')}}
        </div>
    @endif
<div class="container">
    <div class="card">
        <div class="container-fluid">
            <div class="wrapper row">
                <div class="preview col-md-6">

                    <div class="preview-pic tab-content">
                        <div class="tab-pane active"><img src="{{asset('uploads/'.$detail_product->image)}}" id="hinh"/>
                        </div>
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">

                        <li class="active"><a data-target="#pic-1" href="#" onclick="doihinh('h1')" data-toggle="tab"><img src="{{asset('uploads/'.$detail_product->image)}}" id="h1" /></a></li>
                        @foreach($image as $img)
                        <li> <a data-target="#pic-2" href="#" onclick="doihinh('h2')" data-toggle="tab"><img src="{{asset('uploads/'.$img->image)}}" id="h2" /></a></li>
                        @endforeach
                    </ul>

                </div>
                <div class="details col-md-6">
                    <h2 class="product-title">{{$detail_product->name}}</h2>
                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="review-no">41 Đánh Giá</span>
                    </div>
                    <p class="product-description">
                    <p><em><strong>{{$detail_product->description}}</p>
                    @if($detail_product->promotion_price==0)
                        <h4 class="price"><span>{{$detail_product->unit_price}}</span></h4>
                    @else
                        <h4 class="price"><span>{{$detail_product->promotion_price}}</span><small style="color: gray;font-size: 20px;">{{$detail_product->unit_price}}</small></h4>
                    @endif
                    <div>
                        <form action="{{route('themgiohang', $detail_product->id)}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div class="single-item-options">
                                <select class="wc-select" name="size" style="margin-top: 10px">
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                                <div class="clearfix"></div>
                            </div>
                            @if($detail_product->amount<=0)
                                <div><h2>Sản phẩm đã hết hàng rồi!!!</h2></div>
                            @else
                                    <input type="submit" name="Add" value="Add" class="btn btn-secondary">
                            @endif
                        </form>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tabset">
    <!-- Tab 1 -->
    <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
    <label for="tab1">Giới Thiệu Chung</label>
    <!-- Tab 2 -->
    <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
    <label for="tab2">Thành Phần</label>
    <!-- Tab 3 -->
    <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
    <label for="tab3">Cách Sử Dụng</label>

    <div class="tab-panels">
        <section id="marzen" class="tab-panel">
            <p>{{$detail_product->descriptive}}</p>
            <img class="acnes " src="../img/cach-dung-bha-paulas-choice-1.jpg">
        </section>
        <section id="rauchbier" class="tab-panel">
            <p>100% Coton</p>
        </section>
        <section id="dunkles" class="tab-panel">
            <p>Để bảo quản áo tốt hơn, chúng tôi khuyên bạn lộn mặt trái khi giặt và ủi, cũng như không sử dụng chế độ sấy của máy.</p>
        </section>
    </div>
</div>

@endsection
@section('script')
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
        jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
        jQuery('.quantity').each(function() {
            var spinner = jQuery(this),
                input = spinner.find('input[type="number"]'),
                btnUp = spinner.find('.quantity-up'),
                btnDown = spinner.find('.quantity-down'),
                min = input.attr('min'),
                max = input.attr('max');

            btnUp.click(function() {
                var oldValue = parseFloat(input.val());
                if (oldValue >= max) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue + 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

            btnDown.click(function() {
                var oldValue = parseFloat(input.val());
                if (oldValue <= min) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue - 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

        });
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





