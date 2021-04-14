<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SW Shop</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('/images/favicon.png')}}"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">
    @yield('link')




    <!--
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/blogcarousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/section1.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
    <link rel="stylesheet" href="{{asset('css/pagination.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/signout.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
-->
</head>

<body>
<div>
</div>
<div id="myOverlay" class="overlay">
    <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
    <div class="overlay-content">
        <form action="{{route('timkiem')}}" method="get">
            <input type="text" placeholder="Tìm Kiếm...." name="key">
            <button type="submit"><i class="fa fa-search" style="color: white;"></i></button>
        </form>
    </div>
</div>
<div id="container-floating">

    <button class="nd3 nds openBtn" onclick="openSearch()"> <img class="edit"
                                                                 src="{{asset('/images/search-12-24.png')}}"></button>
    <div class="nd1 nds">
        <a href="{{route('dathang')}}"> <img class="edit" src="{{asset('/images/cart-73-24.png')}}"></a>
    </div>

    <div id="floating-button" onclick="topFunction()">
        <p class="plus">+</p>
        <img class="edit" src="{{asset('/images/bt_compose2_1x.png')}}">
    </div>

</div>
<div class="menu-container">
    <div class="menu">
        <a href="{{route('trangchu')}}" class="navbar-brand d-flex justify-content-center">SW Shop</a>

        <ul class="clearfix d-flex justify-content-center">
            <li><b class="outside"><a  href="{{URL::asset('trangchu')}}">Trang Chủ</a></b>
            </li>
            <li><b class="outside">Sản Phẩm</b>
                <ul>
                    <li style="margin-left: 150px"><a href="{{route('Products',1)}}" class="subhead">Áo</a>
                        <ul>
                            @foreach($ao as $a)
                            <li><a href="{{route('loaisanpham',$a->id)}}" class="inside">{{$a->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{route('Products',2)}}" class="subhead">Quần</a>
                        <ul>
                            @foreach($quan as $q)
                                <li><a href="{{route('loaisanpham',$q->id)}}" class="inside">{{$q->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{route('Products',3)}}" class="subhead">Giày & Dép</a>
                        <ul>
                            @foreach($giaydep as $gd)
                                <li><a href="{{route('loaisanpham',$gd->id)}}" class="inside">{{$gd->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{route('Products',4)}}" class="subhead">Phụ kiện</a>
                        <ul>
                            @foreach($phukien as $p)
                                <li><a href="{{route('loaisanpham',$p->id)}}" class="inside">{{$p->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </li>
            <li><b class="outside">Thương Hiệu</b>
                <ul>
                    <li><a href="">Thương Hiệu A-Z</a></li>
                    <li><a href="">Thương Hiệu Mới</a></li>
                    <li><a href="">Thương Hiệu Nổi Bật</a></li>
                </ul>
            </li>



            <li><b class="outside"><a href="{{route('contact')}}">Liên Hệ</a></b>
            </li>

        </ul>


    </div>
</div>

@yield('Noidung')

<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-about wow fadeInUp">
                    <h3 class="navbar-brand2">SW Shop</h3>
                    <p>
                        We are a young company always looking for new things to help you
                    </p>
                    <p>&copy; Delice Inc.</p>
                </div>
                <div class="col-md-4 offset-md-1 footer-contact wow fadeInDown">
                    <h3>Liên Hệ</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Số 3,Ngõ 90 Khuất Duy Tiến, Thanh Xuân, Hà Nội</p>
                    <p><i class="fas fa-phone" ></i> 039.699.5982</p>
                    <p><i class="fas fa-envelope"></i> Swshops@gmail.com</p>
                </div>
                <div class="col-md-4 footer-links wow fadeInUp">
                    <div class="row">
                        <div class="col">
                            <h3>Hỗ Trợ</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p><a class="scroll-link" href="#top-content">Thương Hiệu</a></p>
                            <p><a href="#">Chuyển Khoản</a></p>
                            <p><a href="#">Phí Vận Chuyển</a></p>
                        </div>
                        <div class="col-md-6">
                            <p><a href="#">Khuyến Mãi</a></p>
                            <p><a href="#">Chính Sách Đổi Trả</a></p>
                            <p><a href="#">Chính Sách Bảo Mật</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col footer-social d-flex justify-content-center">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="{{URL::asset('js/multislider.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@yield('script')
<!--
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
<script>
    var promoCode;
    var promoPrice;
    var fadeTime = 300;

    $('.quantity input').change(function () {
        updateQuantity(this);
    });

    $('.remove button').click(function () {
        removeItem(this);
    });

    $(document).ready(function () {
        updateSumItems();
    });

    $('.promo-code-cta').click(function () {

        promoCode = $('#promo-code').val();

        if (promoCode == '10off' || promoCode == '10OFF') {
            if (!promoPrice) {
                promoPrice = 10;
            } else if (promoCode) {
                promoPrice = promoPrice * 1;
            }
        } else if (promoCode != '') {
            alert("Mã Ưu Đãi Không Hợp Lệ");
            promoPrice = 0;
        }
        if (promoPrice) {
            $('.summary-promo').removeClass('hide');
            $('.promo-value').text(promoPrice.toFixed(2));
            recalculateCart(true);
        }
    });
    function recalculateCart(onlyTotal) {
        var subtotal = 0;
        $('.basket-product').each(function () {
            subtotal += parseFloat($(this).children('.subtotal').text());
        });
        var total = subtotal;
        var promoPrice = parseFloat($('.promo-value').text());
        if (promoPrice) {
            if (subtotal >= 100) {
                total -= promoPrice;
            } else {
                alert('Chỉ áp dụng với đơn hàng trên 100.000đ');
                $('.summary-promo').addClass('hide');
            }
        }

        if (onlyTotal) {
            $('.total-value').fadeOut(fadeTime, function () {
                $('#basket-total').html(total.toFixed(2));
                $('.total-value').fadeIn(fadeTime);
            });
        } else {
            $('.final-value').fadeOut(fadeTime, function () {
                $('#basket-subtotal').html(subtotal.toFixed(2));
                $('#basket-total').html(total.toFixed(2));
                if (total == 0) {
                    $('.checkout-cta').fadeOut(fadeTime);
                } else {
                    $('.checkout-cta').fadeIn(fadeTime);
                }
                $('.final-value').fadeIn(fadeTime);
            });
        }
    }
    function updateQuantity(quantityInput) {
        var productRow = $(quantityInput).parent().parent();
        var price = parseFloat(productRow.children('.price').text());
        var quantity = $(quantityInput).val();
        var linePrice = price * quantity;

        productRow.children('.subtotal').each(function () {
            $(this).fadeOut(fadeTime, function () {
                $(this).text(linePrice.toFixed(2));
                recalculateCart();
                $(this).fadeIn(fadeTime);
            });
        });

        productRow.find('.item-quantity').text(quantity);
        updateSumItems();
    }

    function updateSumItems() {
        var sumItems = 0;
        $('.quantity input').each(function () {
            sumItems += parseInt($(this).val());
        });
        $('.total-items').text(sumItems);
    }

    function removeItem(removeButton) {
        var productRow = $(removeButton).parent().parent();
        productRow.slideUp(fadeTime, function () {
            productRow.remove();
            recalculateCart();
            updateSumItems();
        });
    }
</script>
-->
</body>
</html>
