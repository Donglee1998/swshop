@extends('master')
@section('link')
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/pagination.css')}}">
    <link rel="stylesheet" href="{{asset('css/section1.css')}}">
@endsection
@section('Noidung')
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <a href="detail_bl.html"><div class="carousel-item active"
                                          style="background-image: url('../images/brandless-a7PzXKoZLOU-unsplash.jpg')">
                    <div class="carousel-caption d-none d-md-block text-left">
                        <h2 class="bloghead-title">Đừng để những chiếc cọ trở nên xấu xí</h2>
                        <p class="bloghead-seemore">Ngay khi bạn mới mua một cây cọ trang điểm mới, việc đầu tiên mà bạn cần làm là
                            phải vệ sinh nó rồi mới sử dụng nó vào mục đích chính là để makeup. Ngay cả trong quá trình sử dụng, bạn
                            cũng cần thường xuyên lau rửa những cây cọ trang điểm để không chỉ loại bỏ những lớp mỹ phẩm sau khi trang
                            điểm mà còn làm sạch dầu nhờn trên da, vi khuẩn và tế bào chết bám trên đó nữa.</p>
                    </div></a>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <a href="detail_bl.html"><div class="carousel-item"
                                      style="background-image: url('../images/brandless-dQ_b1I6xm3Q-unsplash.jpg')">
                <div class="carousel-caption d-none d-md-block text-left">
                    <h2 class="bloghead-title">Cách Lựa Chọn Mỹ Phẩm Phù Hợp, An toàn</h2>
                    <p class="bloghead-seemore">Trước khi mua mỹ phẩm, bạn nên tìm hiểu về thương hiệu mỹ uy tín. Việc làm này
                        không khó, bạn có thể tìm hiểu qua các website của những thương hiệu đó. Các thương hiệu mỹ phẩm uy tín sẽ
                        có website riêng của mình và các sản phẩm của họ sẽ được giới thiệu đầy đủ trên đó.</p>
                </div></a>
    </div>
    <!-- Slide Three - Set the background image for this slide in the line below -->
    <a href="detail_bl.html"><div class="carousel-item" style="background-image: url('../images/brandless-bvqOesSpw3s-unsplash.jpg')">
            <div class="carousel-caption d-none d-md-block text-left">
                <h2 class="bloghead-title">Top 5 xịt khoáng cho mùa đông</h2>
                <p class="bloghead-seemore">Mùa đông, gió lạnh, nhiệt độ và độ ẩm trong không khí thấp khiến làn da trở nên
                    khô sần, mất nước, nặng hơn là nứt nẻ, chảy máu và tổn thương. Và ngay lúc này, bạn rất cần một chai xit
                    khoáng để cấp nước, dưỡng ẩm, làm dịu da và duy trì làn da mịn mượt suốt cả ngày dài. Vậy đâu là dòng xịt
                    khoáng dưỡng ẩm tốt nên lựa chọn? Ngay bên dưới là top 5 dòng xịt khoáng tốt nhất hiện nay giúp bạn “cứu
                    nguy” cho làn da vào tiết trời khắc nghiệt của mùa đông.</p>
            </div>
        </div></a>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</header>
</section>
<div class="container">
    <h1 class="my-4">Tin Mới Nhất
    </h1>
    <div class="row">
        <div class="col-md-6">
            <a href="detail_bl.html">
                <img class="img-fluid rounded mb-2" src="../img/blog_1.jpg" alt="">
        </div>
        <div class="col-md-5">
            <small style="color: #949494;">HAIRCARE</small>
            <h3>Josh Wood nhận được 6,5 triệu đô la, dẫn đầu bởi Index</h3>
            <p>Trong kỷ nguyên Amazon, nơi có tới 90% người tiêu dùng sử dụng hàng hóa để mua hàng hóa và Amazon
                chiếm tỷ lệ tăng nhanh trong tổng chi tiêu bán lẻ của người tiêu dùng (cùng với các tên khác như
                Walmart), trực tiếp cho các thương hiệu tiêu dùng cùng với Tech Ứng dụng -First cũng sử dụng
                phương
                tiện truyền thông xã hội, phát triển thành một cuộc cạnh tranh đôi khi đáng ngạc nhiên, nhưng
                thường
                hiệu quả.</p></a>
            <p class="author"><img alt="bluz" src="../img/adrian-swancar-4i4YyWAZbDY-unsplash.jpg" width="30" height="30"
                                   class="jsx-2418319489 avatar"><span class="authorname"> Blutori</span><span class="time"><span> - vừa
              xong</span></span></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <a href="#">
                <img class="img-fluid rounded mb-2" src="../img/blog_3.jpg" alt="">
        </div>
        <div class="col-md-5">
            <small style="color: #949494;">SỨC KHỎE</small>
            <h3>Câu chuyện nhập môn giảm 20kg của nữ nhà văn Việt có sức ăn hơn hẳn những nam thanh niên to khỏe nhất</h3>
            <p>Dù có cân nặng 70kg và sức ăn siêu khủng, hơn hẳn “những nam thanh niên to khỏe nhất” nhưng với phương pháp
                giảm cân này, nhà văn Di Li vẫn có thể dễ dàng giảm cân nặng xuống còn 56kg chỉ ...</p>
            <p class="author "><img alt="bluz" src="../img/anastasia-vityukova-rpF3p_RrE9g-unsplash.jpg" width="30"
                                    height="30" class="jsx-2418319489 avatar"><span class="authorname"> nguyenlongf9</span><span
                    class="time"><span> - 2 phút
              trước</span></span></p></a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <a href="#">
                <img class="img-fluid rounded mb-2" src="../img/blog_2.jpg" alt="">
        </div>
        <div class="col-md-5">
            <small style="color: #949494;">TRANG ĐIỂM</small>
            <h3>Mùa hanh khô, nghe bác sĩ da liễu tiết lộ loạt mẹo hữu ích giúp da bạn luôn mềm mịn</h3>
            <p>Tuy là "rào cản" đầu tiên của cơ thể chống lại vi khuẩn, virus nhưng trong thời tiết lạnh, hanh khô của tiết
                trời mùa đông rất dễ ảnh hưởng đến sức khỏe của da, vừa gây ảnh hưởng đến sức khỏe, vừa ...</p>
            <p class="author"><img alt="bluz" src="../img/thibault-debaene-pZTVa_Gt1f8-unsplash.jpg" width="30" height="30"
                                   class="jsx-2418319489 avatar"><span class="authorname"> trando</span><span class="time"><span> - 1 giờ
              trước</span></span></p></a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Four -->
    <div class="row">
        <div class="col-md-6">
            <a href="#">
                <img class="img-fluid rounded mb-2" src="../img/noah-buscher-eCJiD00AJqs-unsplash.jpg" alt="">
        </div>
        <div class="col-md-5">
            <small style="color: #949494;">SKINCARE</small>
            <h3>Không thể chủ quan trước 4 lỗi skincare khiến da bạn cứ héo hon, xám xịt suốt cả ngày Đông lạnh lẽo
            </h3>
            <p>Trong quá trình skincare, các nàng sẽ khó tránh khỏi những sai lầm khiến da xấu đi, thay vì trở nên đẹp hơn
                nhờ sự chăm sóc siêng năng, bền bỉ. Điều quan trọng là, các nàng cần nhận biết và rút kinh nghiệm sau những
                lỗi lầm ấy để công sức skincare...

            </p>
            <p class="author"><img alt="bluz" src="../img/ava1.jpg" width="30" height="30" class="avatar"><span
                    class="authorname"> ice.lx17</span><span class="time"><span> - 4 giờ
              trước</span></span></p></a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Pagination -->


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
