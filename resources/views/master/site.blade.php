<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ url('site') }}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('site') }}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('site') }}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ url('site') }}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{ url('site') }}/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('site') }}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('site') }}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('site') }}/css/style.css" type="text/css">

    @yield('css')

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>admin@gmail.com</li>
                                <li>Miễn phí vận chuyển cho đơn hàng từ 99k</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{ route('home') }}"><img src="{{ url('site') }}/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{ route('home') }}">Trang Chủ</a></li>
                            <li><a href="{{ route('product.list') }}">Sản Phẩm</a></li>
                            {{-- <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="{{ route('blog') }}">Tin Tức</a></li>
                            <li><a href="{{ route('contact') }}">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh Mục</span>
                        </div>
                        <ul>
                            @foreach ($cat_global as $cat_local)
                                <li><a
                                        href="{{ route('home.category', ['category' => $cat_local->id, 'slug' => Str::slug($cat_local->name)]) }}">{{ $cat_local->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    Tìm kiếm mọi thứ
                                    {{-- <span class="arrow_carrot-down"></span> --}}
                                </div>
                                <input type="text" name="keyword" placeholder="Nhập từ khóa . . .">
                                <button type="submit" class="site-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84 228.3456</h5>
                                <span>Hỗ trợ 24/7 </span>
                            </div>
                        </div>
                    </div>
                    {{-- @if (Route::currentRouteName() == 'home') --}}
                    <div class="hero__item set-bg" data-setbg="{{ url('site') }}/img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>Hoa Quả Tươi Sạch</span>
                            <h2>Rau <br />100% Hữu Cơ</h2>
                            <p>chính sách giao hàng miễn phí</p>
                            <a href="#" class="primary-btn">Mua Ngay</a>
                        </div>
                    </div>
                    {{-- @endif --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    @yield('content')

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="{{ route('home') }}"><img src="{{ url('site') }}/img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Địa chỉ: ABC-XYZ, Hà Nội</li>
                            <li>Số điện thoại: +65 11.188.888</li>
                            <li>Email: admin@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1  pt-2">
                    <div class="footer__widget">
                        <h6>Thông Tin Thêm</h6>
                        <ul>
                                <li><a href="#">Về chúng tôi</a></li>
                                <li><a href="{{route('contact')}}">Liên hệ</a></li>
                                <li><a href="#">Chính sách giao hàng</a></li>
                                <li><a href="#">Chính sách bảo mật</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Kết Nối Với Chúng Tôi</h6>
                        <p>Nhận những cập nhật mới nhất và thông tin ưu đãi.</p>
                        <form action="#">
                            <input type="text" placeholder="Nhập email của bạn">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved 
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="{{ url('site') }}/img/payment-item.png"
                                alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ url('site') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ url('site') }}/js/bootstrap.min.js"></script>
    <script src="{{ url('site') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ url('site') }}/js/jquery-ui.min.js"></script>
    <script src="{{ url('site') }}/js/jquery.slicknav.js"></script>
    <script src="{{ url('site') }}/js/mixitup.min.js"></script>
    <script src="{{ url('site') }}/js/owl.carousel.min.js"></script>
    <script src="{{ url('site') }}/js/main.js"></script>

    @yield('js')


</body>

</html>
