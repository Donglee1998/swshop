@extends('master')
@section('link')
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/blogcarousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/section1.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/signout.css')}}">
@endsection
@section('Noidung')
    @if(Session::has('thongbao'))
        <div class="alert alert-success">{{Session::get('thongbao')}}</div>
    @endif
    <div class="login">
        <div class="container">
            <section id="content">
                <form action="{{route('dangky')}}" method="post">
                    {{ csrf_field() }}
                    <h1>Login Form</h1>
                    <div>
                        <input type="text" placeholder="Email" name="email" required="" id="username" />
                    </div>
                    <div>
                        <input type="text" placeholder="Fullname" name="fullname" required="" id="username" />
                    </div>
                    <div>
                        <input type="text" placeholder="Address" name="address" required="" id="username" />
                    </div>
                    <div>
                        <input type="text" placeholder="Phone" name="phone" required="" id="username" />
                    </div>
                    <div>
                        <input type="password" placeholder="Password" name="password" required="" id="password" />
                    </div>
                    <div>
                        <input type="password" placeholder="Re-enter Password" name="re_password" required="" id="password" />
                    </div>
                    <div style="margin-left: 50%">
                        <input type="submit" value="Register" />
                    </div>
                </form><!-- form -->

            </section><!-- content -->
        </div><!-- container -->
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
