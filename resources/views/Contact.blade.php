@extends('master')
@section('Noidung')
<section class="jumbotron text-center h-25"style="background-image: url('../images/Rectangle 142.png')">
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
                                Số 3, Ngõ 90 Khuất Duy Tiến, Thanh Xuân, Hà Nội
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <span>Hotline: </span>
                                0396995982
                            </li>
                            <li>
                                <i class="fa fa-mobile"></i>
                                <span>Email: </span>
                                <a href="#">vanduc2314@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="map-responsive">
                        <iframe
                            src="https://maps.google.com/maps?width=565&amp;height=430&amp;hl=en&amp;q=s%E1%BB%91%203%2Cng%C3%B5%2090%2C%20khu%E1%BA%A5t%20duy%20ti%E1%BA%BFn+(Title)&amp;ie=UTF8&amp;t=&amp;z=19&amp;iwloc=B&amp;output=embed"
                            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div><br />
                </div>
            </div>
        </div>
    </div>
@endsection
