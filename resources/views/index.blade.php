
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SW Shop</title>
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('../css/navbar.css')}}">
    <link rel="stylesheet" href="{{URL::asset('../css/main.css')}}">
    <link rel="stylesheet" href="{{URL::asset('../css/font.css')}}">
    <link rel="stylesheet" href="{{URL::asset('../css/footer.css')}}">
    <link rel="stylesheet" href="{{URL::asset('../css/blogcarousel.css')}}">
    <link rel="stylesheet" href="{{URL::asset('../css/section1.css')}}">
</head>

<body>
<div id="myOverlay" class="overlay">
    <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
    <div class="overlay-content">
        <form action="index.html">
            <input type="text" placeholder="Tìm Kiếm...." name="search">
            <a href="search_re.html"><i class="fa fa-search" style="color: white;"></i></a>
        </form>
    </div>
</div>
<div id="container-floating">

    <div class="nd4 nds">
        <a id="demo01" href="contact.html"><img class="edit" src="../img/online-support-24.png"></a>
    </div>
    <button class="nd3 nds openBtn" onclick="openSearch()"> <img class="edit"
                                                                 src="../img/search-12-24.png"></button>
    <div class="nd1 nds">
        <a href="cart.html"> <img class="edit" src="../img/cart-73-24.png"></a>
    </div>

    <div id="floating-button" onclick="topFunction()">
        <p class="plus">+</p>
        <img class="edit" src="../img/bt_compose2_1x.png">
    </div>

</div>
<div class="menu-container">
    <div class="menu">
        <a href="index.html" class="navbar-brand d-flex justify-content-center">SW Shop</a>
        <ul class="clearfix d-flex justify-content-center">
            <li><b class="outside"><a class="active" href="index.html">Trang Chủ</a></b>

            <li><b class="outside">Sản Phẩm</b>
                <ul>
                    <li><a href="product.html" class="subhead">Áo</a>
                        <ul>
                            <li><a href="product.html" class="inside">Áo Thun</a></li>
                            <li><a href="product.html" class="inside">Áo Sơmi</a></li>
                            <li><a href="product.html" class="inside">Áo Polo</a></li>
                            <li><a href="product.html" class="inside">Áo Nỉ</a></li>
                            <li><a href="product.html" class="inside">Áo Khoác</a></li>
                        </ul>
                    </li>
                    <li><a href="product.html" class="subhead">Quần</a>
                        <ul>
                            <li><a href="product.html">Quần Jean</a></li>
                            <li><a href="product.html">Quần Kaki</a></li>
                            <li><a href="product.html">Quần Short</a></li>
                            <li><a href="product.html">Quần Âu</a></li>
                            <li><a href="product.html">Quần Jogger</a></li>
                        </ul>
                    </li>
                    <li><a href="product.html" class="subhead">Giày & Dép</a>
                        <ul>
                            <li><a href="product.html">Giày</a></li>
                            <li><a href="product.html">Dép</a></li>
                        </ul>
                    </li>
                    <li><a href="product.html" class="subhead">Phụ kiện</a>
                        <ul>
                            <li><a href="product.html">Nón</a></li>
                            <li><a href="product.html">Package</a></li>
                        </ul>
                    </li>
                    <li><a href="product.html" class="subhead">Sales</a>
                    </li>
                </ul>
            </li>
            <li><b class="outside">Thương Hiệu</b>
                <ul>
                    <li><a href="product.html">Thương Hiệu A-Z</a></li>
                    <li><a href="product.html">Thương Hiệu Mới</a></li>
                    <li><a href="product.html">Thương Hiệu Nổi Bật</a></li>
                </ul>
            </li>


            <li><b class="outside">Blog</b>
            </li>
            <li><b class="outside"><a href="contact.html">Liên Hệ</a></b>
            </li>
        </ul>
        </li>
        </ul>
    </div>
</div>
<!--Carousel-->

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
                        <p><i class="fas fa-envelope"></i> Swshops@gmail.com</a></p>
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
    <script src="{{URL::asset('../js/multislider.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        $('#mixedSlider').multislider({
            duration: 750,
            interval: 2000
        });
    </script>
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
    <script>
        function openSearch() {
            document.getElementById("myOverlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("myOverlay").style.display = "none";
        }
    </script>
</body>
</html>
