@extends('master')
@section('link')
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/section1.css')}}">
@endsection
@section('Noidung')
<section class="jumbotron text-center h-25"style="background-image: url('{{asset('images/Rectangle 142.png')}}')">
    <div class="container">
        <h1 style="color: white;"><b>Liên Hệ</b>
        </h1>

    </div>
</section>
<div class="shop-main-area">
    <div class="contact-area ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="contact-form">
                        <h3><i class="fa fa-envelope-o"></i>Hòm Thư Góp Ý</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-form-3">
                                    <form action="#">
                                        <input type="text" placeholder="Tên*" />
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-form-3">
                                    <form action="#">
                                        <input type="email" placeholder="Email*" />
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="single-form-3">
                            <form action="#">
                                <input type="text" placeholder="Tiêu Đề" />
                            </form>
                        </div>
                        <div class="single-form-3">
                            <form action="#">
                                <textarea name="massage" placeholder="Chi Tiết" cols="30" rows="6"></textarea>
                                <input type="submit" value="Submit Form">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="contact-info mb-rsp-3">
                        <h3>Contact info</h3>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <span>Địa Chỉ: </span>
                                Số 8 Chiến Lược, Phường Bình Trị Đông, Quận Bình Tân, TPHCM
                            </li>
                            <li>
                                <i class="fa fa-mobile"></i>
                                <span>Hotline: </span>
                                0964662xxx
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <span>Email: </span>
                                <a href="#">donglee123321@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6682721711836!2d106.6197218146224!3d10.760028992332654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752c2f42dc818b%3A0x5d89e0b7ae60c16a!2zOCBDaGnhur9uIEzGsOG7o2MsIELDrG5oIFRy4buLIMSQw7RuZywgQsOsbmggVMOibiwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1615279394700!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div><br />
                </div>
            </div>
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
            function openSearch() {
                document.getElementById("myOverlay").style.display = "block";
            }

            function closeSearch() {
                document.getElementById("myOverlay").style.display = "none";
            }
        </script>
@endsection
