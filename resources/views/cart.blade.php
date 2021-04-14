@extends('master')
@section('link')
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('css/cart.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/section1.css')}}">
@endsection
@section('Noidung')
<main>
    <div class="basket" id="basket">
        <div class="basket-labels">
            <ul>
                <li class="item item-heading" >Sản Phẩm</li>
                <li class="price" id="price">Giá</li>

                <li class="quantity" id="quantity">Số Lượng</li>
                <li style="margin-left: 30px" id="subtotal">Size</li>
            </ul>
        </div>
        @foreach($product_cart as $key => $cart)
        <div class="basket-product">
            <div class="item" >
                <div class="product-image" >
                    <img src="{{asset('/uploads/'.$cart->options->image)}}" alt="" class="product-frame" >
                </div>
                <div class="product-details" >
                    <h1><strong><span class="item-quantity" id="item-quantity"></span>{{$cart->name}}</strong></h1>
                </div>
            </div>
            <div class="price">@if($cart->options->promotion_price==0) {{number_format($cart->price)}} @else {{number_format($cart->options->promotion_price)}} @endif</div>
            <div class="quantity" >
                <div style="float: left;margin-right: 5px"><input type="text" readonly="readonly" value="{{$cart->qty}}" min="1" style="width: 40px;text-align: center"></div>
                <div><a href="{{route('xoagiohang',$key)}}">Xóa</a></div>
            </div>
            <div style="text-align: center" ><span class="cart-item-amount">{{$cart->options->size}}</span></div>
        </div>
            @endforeach
        <div class="basket-module">
            <label for="promo-code">Mã Giảm Giá</label>
            <input id="promo-code" type="text" name="promo-code" maxlength="5" class="promo-code-field">
            <button class="promo-code-cta">Áp Dụng</button>
        </div>
    </div>
    <aside>
        <div class="summary">
            <div class="summary-total-items"><span class="total-items"></span> Sản Phẩm Trong Giỏ</div>
            <div class="summary-total">
                <div class="total-title">Tổng Tiền</div>
                <div class="total-value final-value" id="basket-total">{{Cart::subtotal()}}</div>
            </div>
            <div class="summary-checkout">
                <a href="{{route('thanhtoan')}}" style="color: white;"><button class="checkout-cta">Tiến Hành Thanh
                        Toán</a></button>
            </div>
        </div>
    </aside>
</main>
@endsection
@section('script')
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
@endsection
