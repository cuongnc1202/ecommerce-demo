@extends('master.site')

@section('title', 'Trang Chủ')

@section('content')
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach ($cat_global as $cat)
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="categories__item set-bg" data-setbg="{{ url('uploads') }}/{{ $cat->image }}">
                                <h5><a href="#">{{ $cat->name }}</a></h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản Phẩm Nổi Bật</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Tất Cả</li>
                            <li data-filter=".oranges">Hoa Quả</li>
                            <li data-filter=".fresh-meat">Thịt Tươi</li>
                            <li data-filter=".vegetables">Rau Sạch</li>
                            <li data-filter=".fastfood">Đồ Ăn Vặt</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <x-product-list :data="$randomProduct" />
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                    <div class="banner__pic">
                        <img src="{{ url('site') }}/img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                    <div class="banner__pic">
                        <img src="{{ url('site') }}/img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="latest-product__text">
                        <h4>Sản Phẩm Mới Nhất</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <div class="latest-prdouct__slider__item">
                                    @foreach ($newProduct as $newProd)
                                        <a href="{{ url('product-detail', $newProd->id) }}" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ url('uploads') }}/{{ $newProd->image }}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6 class="py-3 text-success">{{ $newProd->name }}</h6>
                                                @if ($newProd->sale_price != 0)
                                                <h5><b>{{ number_format($newProd->sale_price) }} vnd</b></h5>
                                                <h6 class="text-muted ml-2"><del>{{ number_format($newProd->price) }} vnd</del></h6>
                                            @else
                                                <h5><b>{{ number_format($newProd->price) }} vnd</b></h5>
                                            @endif
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                @foreach ($newProduct as $newProd)
                                    <a href="{{ url('product-detail', $newProd->id) }}" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{ url('uploads') }}/{{ $newProd->image }}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6 class="py-3 text-success">{{ $newProd->name }}</h6>
                                            @if ($newProd->sale_price != 0)
                                            <h5><b>{{ number_format($newProd->sale_price) }} vnd</b></h5>
                                            <h6 class="text-muted ml-2"><del>{{ number_format($newProd->price) }} vnd</del></h6>
                                        @else
                                            <h5><b>{{ number_format($newProd->price) }} vnd</b></h5>
                                        @endif
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="latest-product__text">
                        <h4>Sản Phẩm Hàng Đầu</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <div class="latest-prdouct__slider__item">
                                    @foreach ($topProduct as $topProd)
                                        <a href="{{ url('product-detail', $topProd->id) }}" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ url('uploads') }}/{{ $topProd->image }}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6 class="py-3 text-success">{{ $topProd->name }}</h6>
                                                @if ($topProd->sale_price != 0)
                                                <h5><b>{{ number_format($topProd->sale_price) }} vnd</b></h5>
                                                <h6 class="text-muted ml-2"><del>{{ number_format($topProd->price) }} vnd</del></h6>
                                            @else
                                                <h5><b>{{ number_format($topProd->price) }} vnd</b></h5>
                                            @endif
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                @foreach ($topProduct as $topProd)
                                    <a href="{{ url('product-detail', $topProd->id) }}" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{ url('uploads') }}/{{ $topProd->image }}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6 class="py-3 text-success">{{ $topProd->name }}</h6>
                                            @if ($topProd->sale_price != 0)
                                            <h5><b>{{ number_format($topProd->sale_price) }} vnd</b></h5>
                                            <h6 class="text-muted ml-2"><del>{{ number_format($topProd->price) }} vnd</del></h6>
                                        @else
                                            <h5><b>{{ number_format($topProd->price) }} vnd</b></h5>
                                        @endif
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="latest-product__text">
                        <h4>Sản Phẩm Hàng Đầu</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <div class="latest-prdouct__slider__item">
                                    @foreach ($rateProduct as $rateProd)
                                        <a href="{{ url('product-detail', $rateProd->id) }}" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ url('uploads') }}/{{ $rateProd->image }}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6 class="py-3 text-success">{{ $rateProd->name }}</h6>
                                                @if ($rateProd->sale_price != 0)
                                                    <h5><b>{{ number_format($rateProd->sale_price) }} vnd</b></h5>
                                                    <h6 class="text-muted ml-2"><del>{{ number_format($rateProd->price) }} vnd</del></h6>
                                                @else
                                                    <h5><b>{{ number_format($rateProd->price) }} vnd</b></h5>
                                                @endif
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                @foreach ($rateProduct as $rateProd)
                                    <a href="{{ url('product-detail', $rateProd->id) }}" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{ url('uploads') }}/{{ $rateProd->image }}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6 class="py-3 text-success">{{ $rateProd->name }}</h6>
                                            @if ($rateProd->sale_price != 0)
                                            <h5><b>{{ number_format($rateProd->sale_price) }} vnd</b></h5>
                                            <h6 class="text-muted ml-2"><del>{{ number_format($rateProd->price) }} vnd</del></h6>
                                        @else
                                            <h5><b>{{ number_format($rateProd->price) }} vnd</b></h5>
                                        @endif
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Tin Tức 24h</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{ url('site') }}/img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Mẹo giúp việc nấu ăn trở nên đơn giản</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{ url('site') }}/img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 cách chuẩn bị bữa sáng cho tuổi 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{ url('site') }}/img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Thăm trang trại sạch ở Mỹ</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

@stop()
