
@extends('master')
@section('Noidung')
<div class="container">
    <div class="row">
        <div class="col">
            <section class="jumbotron text-left">
                <div class="container">
                    <h1 class="jumbotron-heading"><b>SW Shop</b>
                    </h1>
                    <p class="lead text-muted mb-0"> SW Shop là 1 trong những sự lựa chọn hàng đầu về style streetwear dành cho bạn. Chúng tôi xin cam kết đem đến cho bạn những sản phẩm chất lượng nhất.<a class="see-more" href="#"> Buy Now </a></p>
                </div>
            </section>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
            <div class="card mb-3">
                <div class="card-header"><i class="fa fa-list"></i> Lọc Theo Giá Tiền</div>
                <ul class="list-group category_block">
                    <li class="list-group-item"><input type="checkbox"> 0đ-200.000đ</li>
                    <li class="list-group-item"><input type="checkbox"> 200.000đ-500.000đ</li>
                    <li class="list-group-item"><input type="checkbox"> 500.000đ-1.000.000đ</li>
                    <li class="list-group-item"><input type="checkbox"> 1.000.000đ trở lên</li>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="row">
                @foreach($product as $new)
                    <div class="col-md-4 col-sm-6">

                        <div class="product-grid">
                            <div class="product-image">
                                <a href="{{route('chitietsanpham',$new->id)}}">
                                    <img class="pic-1" src="{{asset('/images/'.$new->image)}}">
                                </a>
                                <ul class="social">
                                    <li><a href=""><i class="far fa-eye"></i></a></li>
                                    <li><a href=""><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                @if($new->promotion_price!=0)
                                    <span class="product-new-label">Giảm Giá</span>
                                @endif
                            </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star disable"></li>
                                <div>&nbsp;</div>
                            </ul>
                            <div class="product-content">
                                <h3 class="title"><a href="#">{{$new->name}}</a></h3>
                                @if($new->promotion_price==0)
                                    <div class="price">{{$new->unit_price}}</div>
                                @else
                                    <div class="price">{{$new->unit_price}}
                                        <span>{{$new->promotion_price}}</span>
                                    </div>
                                @endif
                                <div>&nbsp;</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            </div>
        </div>
    </div>
</div>



@endsection
