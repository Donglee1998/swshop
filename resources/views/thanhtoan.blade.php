@extends('master')
@section('link')
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/section1.css')}}">
@endsection
@section('Noidung')
    @if(Session::has('flag'))
        <div class="alert alert-{{Session::get('flag')}}" style="width: 40%; margin: auto auto">
            {{Session::get('message')}}
        </div>
    @endif
<section id="checkout-container">
    <div class="container">
        <form class="needs-validation" novalidate method="post" action="{{route('thanhtoan')}}">
            {{ csrf_field()}}
        <div class="row py-5">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="mb-2"><b>Tóm Tắt Giỏ Hàng</b></span>
                    <span class="badge-pill"></span>
                </h4>
                <ul class="list-group mb-3">
                        @foreach($product_cart as $cart)
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0"></h6>
                            <small class="text-muted">{{$cart->qty}}*{{$cart->name}}</small>
                        </div>
                        <span class="text-muted">{{number_format($cart->price)}}</span>
                    </li>
                        @endforeach
                    <li class="list-group-item d-flex justify-content-between ">
                        <div class="text-muted">
                            <h6 class="my-0">Phí Vận Chuyển</h6>
                            <small class="text-muted">Free ship hóa đơn trên 500.000đ</small>
                        </div>
                        <span class="text-muted">@if(Cart::count()>=2)Free Ship @else 40.000đ @endif</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Tổng</span>
                        @if(Cart::count()>=2)
                            <strong>{{Cart::subtotal()}}</strong>
                        @else
                            <strong>{{tong(Cart::subtotal())}}.000</strong>
                        @endif
                    </li>
                </ul>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3"><b>Thông Tin Hóa Đơn</b></h4>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="lastName">Họ và Tên*</label>
                            <input type="text" class="form-control" id="lastName" name="name" placeholder="Lê Văn A" value=""  required>
                            <div class="invalid-feedback">
                                Xin hãy nhập họ tên của bạn
                            </div>
                        </div>
                    </div>
                <div class="mb-3">
                    <label for="number">Gender*
                    </label>
                    <div>
                        <input type="radio" id="huey" name="gender" value="nu"
                               checked>
                        <label for="huey">Nữ</label>
                        <input type="radio" id="dewey" name="gender" value="name">
                        <label for="dewey">Nam</label>
                    </div>

                </div>
                    <div class="mb-3">
                        <label for="number">Số Điện Thoại*
                        </label>
                        <input type="tel" class="form-control" id="email" name="phone" placeholder="0123456789" required>
                        <div class="invalid-feedback">
                            Xin hãy nhập số điện thoại của bạn
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email*
                        </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
                        <div class="invalid-feedback">
                            Xin hãy nhập email để chúng tôi có thể gửi thông tin về đơn hàng
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Địa Chỉ*</label>
                        <input type="text" class="form-control" id="address" name="address"
                               placeholder="Số nhà, ngõ, đường, thành phố" required>
                        <div class="invalid-feedback">
                            Xin hãy điền địa chỉ nhận hàng của bạn
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Ghi Chú</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="notes" rows="3"></textarea>
                    </div>

                    <h4 class="mb-3"><b>Phương Thức Thanh Toán</b></h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" value="Shipcode" class="custom-control-input"
                                   checked required>
                            <label class="custom-control-label" for="credit">Ship code</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" type="radio" value="chuyenkhoan" class="custom-control-input"
                                   required>
                            <label class="custom-control-label" for="debit">Chuyển khoản</label>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-lg btn-block" type="submit">
                            Hoàn Thành Đơn Hàng</button>

            </div>
        </div>
        </form>
    </div>
</section>
<script>
    $(document).ready(function () {
        "use strict";
        $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
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
<script src="../main.min.js"></script>
<script>
    function openSearch() {
        document.getElementById("myOverlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("myOverlay").style.display = "none";
    }
</script>
@endsection
