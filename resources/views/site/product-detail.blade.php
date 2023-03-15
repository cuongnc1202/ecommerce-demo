
@extends('master.site')

@section('title', $product->name)

@section('content')
    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="{{url('uploads')}}/{{$product->image}}" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="{{url('site')}}/img/product/details/product-details-2.jpg"
                                src="{{url('uploads')}}/{{$product->image}}" alt="">
                            <img data-imgbigurl="{{url('site')}}/img/product/details/product-details-3.jpg"
                                src="{{url('uploads')}}/{{$product->image}}" alt="">
                            <img data-imgbigurl="{{url('site')}}/img/product/details/product-details-5.jpg"
                                src="{{url('uploads')}}/{{$product->image}}" alt="">
                            <img data-imgbigurl="{{url('site')}}/img/product/details/product-details-4.jpg"
                                src="{{url('uploads')}}/{{$product->image}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>Chi tiết sản phẩm {{$product->name}}</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 đánh giá)</span>
                        </div>
                        <div class="product__details__price">{{number_format($product->sale_price > 0 ? $product->sale_price : $product->price)}} vnd</div>
                        <p>{{$product->description}}. 
                        </p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Thêm vào giỏ hàng</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Trạng thái</b> <span>Đóng gói</span></li>
                            <li><b>Vận chuyển</b> <span>Trong vòng 1 ngày</span></li>
                            <li><b>Khối lượng</b> <span>0.5 kg</span></li>
                            <li><b>Chia sẻ</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Sản Phẩm Liên Quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                    <x-product-list :data="$rateProduct" />     
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

@stop()
