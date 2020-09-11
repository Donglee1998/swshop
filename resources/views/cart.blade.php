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
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/section1.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('css/cart.css')}}">
</head>

<body>

<div id="myOverlay" class="overlay">
    <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
    <div class="overlay-content">
        <form action="{{route('trangchu')}}">
            <input type="text" placeholder="Tìm Kiếm...." name="search">
            <a href="search_re.html"><i class="fa fa-search" style="color: white;"></i></a>
        </form>
    </div>
</div>
<div id="container-floating">

    <div class="nd4 nds">
        <a id="demo01" href="contact.html"><img class="edit" src="{{asset('/images/online-support-24.png')}}"></a>
    </div>
    <button class="nd3 nds openBtn" onclick="openSearch()"> <img class="edit"
                                                                 src="{{asset('/images/search-12-24.png')}}"></button>
    <div class="nd1 nds">
        <a href="cart.html"> <img class="edit" src="{{asset('/images/cart-73-24.png')}}"></a>
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
            <li><b class="outside"><a class="active" href="{{URL::asset('trangchu')}}">Trang Chủ</a></b>

            <li><b class="outside">Sản Phẩm</b>
                <ul>
                    <li><a href="#" class="subhead">Áo</a>
                        <ul>
                            @foreach($ao as $a)
                                <li><a href="{{route('loaisanpham',$a->id)}}" class="inside">{{$a->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="#" class="subhead">Quần</a>
                        <ul>
                            @foreach($quan as $q)
                                <li><a href="{{route('loaisanpham',$q->id)}}" class="inside">{{$q->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="#" class="subhead">Giày & Dép</a>
                        <ul>
                            @foreach($giaydep as $gd)
                                <li><a href="{{route('loaisanpham',$gd->id)}}" class="inside">{{$gd->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="#" class="subhead">Phụ kiện</a>
                        <ul>
                            @foreach($phukien as $p)
                                <li><a href="{{route('loaisanpham',$p->id)}}" class="inside">{{$p->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="#" class="subhead">Sales</a>
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


            <li><b class="outside"><a href="{{route('blog')}}">Blog</a></b>
            </li>
            <li><b class="outside"><a href="">Liên Hệ</a></b>
            </li>
        </ul>
        </li>
        </ul>
    </div>
</div>
<main>
    <div class="basket" id="basket">
        <div class="basket-labels">
            <ul>
                <li class="item item-heading" >Sản Phẩm</li>
                <li class="price" id="price">Giá</li>
                <li class="quantity" id="quantity">Số Lượng</li>
                <li class="subtotal" id="subtotal">Tạm Tính</li>
            </ul>
        </div>
        <div class="basket-product">
            <div class="item" >
                <div class="product-image" >
                    <img src="{{asset('/images/1-percent-retinol-c15-booster-duo-013-B.jpg')}}" alt="Placholder Image 2"
                         class="product-frame" >
                </div>
                <div class="product-details" >
                    <h1><strong><span class="item-quantity" id="item-quantity">4</span> x 2% BHA LIQUID</strong></h1>
                    <p><strong>Nhỏ, 15ml</strong></p>
                    <p>Mã Sản Phẩm - 232321939</p>
                </div>
            </div>
            <div class="price">100.000</div>
            <div class="quantity" >
                <input type="number" value="4" min="1" class="quantity-field" >
            </div>
            <div class="subtotal" >400.000</div>
            <div class="remove">
                <button>Xóa</button>
            </div>
        </div>
        <div class="basket-product">
            <div class="item">
                <div class="product-image">
                    <img src="{{asset('/images/cbhzp1iyrcjh9tohgvey.jpg')}}" alt="Placholder Image 2"
                         class="product-frame">
                </div>
                <div class="product-details">
                    <h1><strong><span class="item-quantity">1</span> x Bảng Mặt Nude</strong></h1>
                    <p><strong>Lớn</strong></p>
                    <p>Mã Sản Phẩm - 232321939</p>
                </div>
            </div>
            <div class="price">477.000</div>
            <div class="quantity">
                <input type="number" value="1" min="1" class="quantity-field">
            </div>
            <div class="subtotal">477.000</div>
            <div class="remove">
                <button>Xóa</button>
            </div>
        </div>
        <div class="basket-module">
            <label for="promo-code">Mã Giảm Giá</label>
            <input id="promo-code" type="text" name="promo-code" maxlength="5" class="promo-code-field">
            <button class="promo-code-cta">Áp Dụng</button>
        </div>
    </div>
    <aside>
        <div class="summary">
            <div class="summary-total-items"><span class="total-items"></span> Sản Phẩm Trong Giỏ</div>
            <div class="summary-subtotal">
                <div class="subtotal-title">Thành Tiền</div>
                <div class="subtotal-value final-value" id="basket-subtotal">877.000</div>
                <div class="summary-promo hide">
                    <div class="promo-title">Mã Giảm Giá</div>
                    <div class="promo-value final-value" id="basket-promo"></div>
                </div>
            </div>
            <div class="summary-delivery">
                <select name="delivery-collection" class="summary-delivery-selection">
                    <option value="0" selected="selected">Chọn Phương Thức Giao Hàng</option>
                    <option value="collection">Nhận Tại Cửa Hàng</option>
                    <option value="first-class">Chuyển Phát Nhanh</option>
                    <option value="second-class">Chuyển Phát Tiêu Chuẩn</option>
                    <option value="signed-for">Chuyển Phát Tiết Kiệm</option>
                </select>
            </div>
            <div class="summary-total">
                <div class="total-title">Tổng Tiền</div>
                <div class="total-value final-value" id="basket-total">877.000</div>
            </div>
            <div class="summary-checkout">
                <a href="checkout.html" style="color: white;"><button class="checkout-cta">Tiến Hành Thanh
                        Toán</a></button>
            </div>
        </div>
    </aside>

</main>
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
