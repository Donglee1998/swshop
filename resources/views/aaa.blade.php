@extends('master')
@section('Noidung')

    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">

                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1"><img src="{{asset('images/'.$detail_product->image)}}" />
                            </div>
                            <div class="tab-pane" id="pic-2"><img src="../img/clinical-1-percent-retinol-treatment-8010-L-swatch.png" /></div>
                            <div class="tab-pane" id="pic-3"><img src="../img/clinical-1-percent-retinol-treatment-8017-M.png" /></div>
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img
                                        src="../img/1-percent-retinol-c15-booster-duo-013-B.jpg" /></a></li>
                            <li><a data-target="#pic-2" data-toggle="tab"><img src="../img/clinical-1-percent-retinol-treatment-8010-L-swatch.png" /></a></li>
                            <li><a data-target="#pic-3" data-toggle="tab"><img src="../img/clinical-1-percent-retinol-treatment-8017-M.png" /></a>
                            </li>
                        </ul>

                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title">{{$detail_product->name}}</h3>
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
                        <h4 class="price"><span>{{$detail_product->unit_price}}</span><small style="color: gray;font-size: 20px;">{{$detail_product->promotion_price}}</small></h4>
                        <div class="quantity">
                            <input type="number" min="1" max="10" step="1" value="1">
                        </div>
                        <div class="action">
                            <a href="cart.html"
                               style="text-decoration: none; color: white;"><button class="add-to-cart btn btn-default" type="button">add to cart</button></a>
                            <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
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
                <p>Khi sử dụng Beta Hydroxide A Xít của Paula’s Choice rất có thể các bạn sẽ gặp phải tình huống không mong
                    muốn, đó là “đẩy mụn”, rất nhiều trường hợp đã bị đẩy mụn khi sử dụng BHA của Paula’s Choice và lo sợ, không
                    dám dùng tiếp vì nghĩ dùng sản phẩm bị dị ứng, kích ứng, nhưng hoàn toàn không phải vậy. Đơn giản da chúng
                    mình đang tích tụ rất nhiều cặn bẩn, sợi bã nhờn, các chất cặn trang điểm, dưỡng da trong da, tóm lại là da
                    chúng mình chưa sạch, vì vậy mới có tình trạng bị mụn ẩn, mụn đầu đen hay da sậm màu, không được sáng mịn, vì
                    vậy khi sử dụng BHA của Paula;s Choice, sản phẩm sẽ đi sâu vào từng lỗ chân lông để đẩy những chất bẩn, thừa
                    thãi đó ra để da chúng mình thực sự sạch và được thở. Trước khi trải qua quá trình da sáng, sạch, mịn thì chắc
                    chắn phải trải qua giai đoạn đẩy mụn, không ít thì nhiều tùy vào từng tình trạng da của các bạn. Vì vậy nếu có
                    bị đẩy mụn khi dùng BHA của Paula’s Choice thì các bạn cũng đừng quá lo lắng nhé, chỉ cần chăm sóc kĩ cho các
                    nốt mụn bị đẩy lên để mụn không bị viêm hay nhiễm trùng, dùng các sản phẩm chấm mụn chuyên dụng chấm lên các
                    nốt mụn, dưỡng da đầy đủ để các nốt mụn ấy không để lại thâm sau khi biến mất.</p>
                <img class="acnes " src="../img/cach-dung-bha-paulas-choice-1.jpg">
                <p>Khi sử dụng Beta Hydroxide A Xít của Paula’s Choice rất có thể các bạn sẽ gặp phải tình huống không mong
                    muốn, đó là “đẩy mụn”, rất nhiều trường hợp đã bị đẩy mụn khi sử dụng BHA của Paula’s Choice và lo sợ, không
                    dám dùng tiếp vì nghĩ dùng sản phẩm bị dị ứng, kích ứng, nhưng hoàn toàn không phải vậy. Đơn giản da chúng
                    mình đang tích tụ rất nhiều cặn bẩn, sợi bã nhờn, các chất cặn trang điểm, dưỡng da trong da, tóm lại là da
                    chúng mình chưa sạch, vì vậy mới có tình trạng bị mụn ẩn, mụn đầu đen hay da sậm màu, không được sáng mịn, vì
                    vậy khi sử dụng BHA của Paula;s Choice, sản phẩm sẽ đi sâu vào từng lỗ chân lông để đẩy những chất bẩn, thừa
                    thãi đó ra để da chúng mình thực sự sạch và được thở. Trước khi trải qua quá trình da sáng, sạch, mịn thì chắc
                    chắn phải trải qua giai đoạn đẩy mụn, không ít thì nhiều tùy vào từng tình trạng da của các bạn. Vì vậy nếu có
                    bị đẩy mụn khi dùng BHA của Paula’s Choice thì các bạn cũng đừng quá lo lắng nhé, chỉ cần chăm sóc kĩ cho các
                    nốt mụn bị đẩy lên để mụn không bị viêm hay nhiễm trùng, dùng các sản phẩm chấm mụn chuyên dụng chấm lên các
                    nốt mụn, dưỡng da đầy đủ để các nốt mụn ấy không để lại thâm sau khi biến mất.</p>
            </section>
            <section id="rauchbier" class="tab-panel">
                <p>Water (Aqua), Glycerin (skin-replenishing), Butylene Glycol (hydration/texture enhancer),
                    Coco-Caprylate/Caprate (emollient), Decyl Oleate (emollient), Cucumis Sativus (Cucumber) Extract
                    (antioxidant), Arctostaphylos Uva-Ursi (Bearberry) Leaf Extract (antioxidant), Propanediol (hydration/slip
                    agent), Glutathione (antioxidant), Chondrus Crispus (Algae) Extract (skin-soothing/film-forming agent),
                    Tetrahexyldecyl Ascorbate (vitamin C/antioxidant), Vitis Vinifera (Grape) Seed Extract (antioxidant),
                    Ubiquinone (coenzyme Q10/antioxidant), Curcumin (antioxidant/skin-soothing), Silybum Marianum (Milk Thistle)
                    Fruit Extract (antioxidant), Epigallocatechin Gallate (green tea-derived antioxidant), Ascophyllum Nodosum
                    (Kelp) Extract, Moringa Oleifera Seed Oil (non-fragrant antioxidant plant oil), Fucus Vesiculosus (Seaweed)
                    Extract (hydration/film-forming agent), Ficus Carica (Fig) Fruit Extract (hydration), Leontopodium Alpinum
                    (Edelweiss) Flower Extract (antioxidant), Emblica Officinalis (Gooseberry) Fruit Extract (antioxidant),
                    Butyrospermum Parkii (Shea) Butter (emollient/antioxidant), Linoleic Acid (skin-restoring), Linolenic Acid
                    (skin-restoring), Phytosphingosine Phosphate (skin-replenishing), Thermus Thermophillus Ferment (antioxidant),
                    Tocopherol (vitamin E/antioxidant), Sesamum Indicum (Sesame) Seed Oil (non-fragrant plant oil), Tocopheryl
                    Acetate (vitamin E/antioxidant), Lecithin (skin-restoring), Xanthan Gum (thickener), Acacia Senegal Gum
                    (film-forming agent), Ectoin (hydration), Glyceryl Stearate (texture enhancer), Polyacrylamide (film-forming
                    agent), Cetearyl Alcohol (hydration), Caprylyl Glycol (hydration), C13-14 Isoparaffin (solvent), C12-15 Alkyl
                    Benzoate (emollient), Polysorbate 80 (emulsifier), 1,2-Hexanediol (preservative), Laureth-7 (emulsifier),
                    Dipropylene Glycol (texture enhancer), Phenoxyethanol (preservative), Ethylhexylglycerin
                    (preservative).<strong>Overall Impression:</strong> An elegant, malty German amber lager with a balanced,
                    complementary beechwood smoke character. Toasty-rich malt in aroma and flavor, restrained bitterness, low to
                    high smoke flavor, clean fermentation profile, and an attenuated finish are characteristic.</p>
            </section>
            <section id="dunkles" class="tab-panel">
                <p>Khi sử dụng Beta Hydroxide A Xít của Paula’s Choice rất có thể các bạn sẽ gặp phải tình huống không mong
                    muốn, đó là “đẩy mụn”, rất nhiều trường hợp đã bị đẩy mụn khi sử dụng BHA của Paula’s Choice và lo sợ, không
                    dám dùng tiếp vì nghĩ dùng sản phẩm bị dị ứng, kích ứng, nhưng hoàn toàn không phải vậy. Đơn giản da chúng
                    mình đang tích tụ rất nhiều cặn bẩn, sợi bã nhờn, các chất cặn trang điểm, dưỡng da trong da, tóm lại là da
                    chúng mình chưa sạch, vì vậy mới có tình trạng bị mụn ẩn, mụn đầu đen hay da sậm màu, không được sáng mịn, vì
                    vậy khi sử dụng BHA của Paula;s Choice, sản phẩm sẽ đi sâu vào từng lỗ chân lông để đẩy những chất bẩn, thừa
                    thãi đó ra để da chúng mình thực sự sạch và được thở. Trước khi trải qua quá trình da sáng, sạch, mịn thì chắc
                    chắn phải trải qua giai đoạn đẩy mụn, không ít thì nhiều tùy vào từng tình trạng da của các bạn. Vì vậy nếu có
                    bị đẩy mụn khi dùng BHA của Paula’s Choice thì các bạn cũng đừng quá lo lắng nhé, chỉ cần chăm sóc kĩ cho các
                    nốt mụn bị đẩy lên để mụn không bị viêm hay nhiễm trùng, dùng các sản phẩm chấm mụn chuyên dụng chấm lên các
                    nốt mụn, dưỡng da đầy đủ để các nốt mụn ấy không để lại thâm sau khi biến mất.</p>
            </section>
        </div>
    </div>

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
