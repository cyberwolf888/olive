<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Olive') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- favicon -->
    <link id="favicon" rel="icon" type="image/png" href="{{ url('assets/img/logo/logo-c.png') }}" />

    <!-- Nivo slider css -->
    <link rel="stylesheet" href="{{ url('assets/custom-slider/css/nivo-slider.css') }}">
    <link rel="stylesheet" href="{{ url('assets/custom-slider/css/preview.css') }}">
    <!-- Icon css -->
    <link rel="stylesheet" href="{{ url('assets/css/pe-icon-7-stroke.css') }}">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{{ url('assets/css/font-awesome.min.css') }}">
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="{{ url('assets/css/meanmenu.min.css') }}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}">
    <!-- Slick css -->
    <link rel="stylesheet" href="{{ url('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/slick-theme.css') }}">
    <!-- Owl-carousel css -->
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.css') }}">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <!-- Style css -->
    <link rel="stylesheet" href="{{ url('assets/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}">
    @stack('plugin_css')
    <!-- Modernizr css -->
    <script src="{{ url('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!--header area start-->
<div class="header-area lg-light-shadow header-transparent home4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-inner clearfix">
                    <div class="col-lg-6 col-md-6 hidden-sm hidden-xs">
                        <!-- start menu area -->
                        <div class="main-menu-area home-4">
                            <!-- nav menu start -->
                            <nav class="menu text-uppercase">
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/sale') }}">Sale</a></li>
                                    <li><a href="#">Category</a>
                                        <ul class="home-index text-upperxase text-left">
                                            @foreach(\App\Models\Category::all() as $category)
                                            <li><a href="{{ route('category',$category->id) }}">{{ $category->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('/newitem') }}">New Item</a></li>
                                    <li><a href="{{ url('/contact') }}">contact</a></li>
                                    @role('admin')
                                        <li><a href="{{ url('/master') }}">Administrator</a></li>
                                    @endrole
                                    @role('member')
                                        <li><a href="{{ url('/member') }}">My Account</a></li>
                                    @endrole
                                </ul>
                            </nav>
                            <!-- end nav menu -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
                        <!--header logo -->
                        <div class="logo home4">
                            <a href="{{ url('/') }}"><img src="{{ url('assets/') }}/img/logo/logo1.png" alt="logo"></a>
                        </div>
                    </div>
                    <!--end Header logo -->
                    <div class="col-lg-3 col-md-4 col-sm-8 col-xs-12">
                        <!-- nav item start -->
                        <div class="header-right user-info header-four">
                            <ul>
                                <li>
                                    <a href="#" class="cart-toggler search-icon"><i class="fa fa-search"></i></a>
                                    <div class="header-bottom-search">
                                        <form action="#" method="POST">
                                            <div>
                                                <input value="" placeholder="Search" autocomplete="off" type="text">
                                                <button class="btn-search" type="submit">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="header-cart-area">
                                    <a href="#">
                                        <span><i class="fa fa-shopping-cart"></i></span>
                                        <span class="cart-inner"><b>shopping cart</b>(<span id="count_cart">{{ \Cart::instance('cart')->count() }}</span>)</span>
                                    </a>
                                    <div class="mini-cart">
                                        @if(\Cart::count())
                                            <ul>
                                                @foreach(Cart::instance('cart')->content() as $row)
                                                <li class="cart-single-item clearfix">
                                                    <div class="cart-img">
                                                        <a href="{{ route('front_product',$row->id) }}">
                                                            <img src="{{ url('storage/app/'.$row->model->getImage($row->id)->image) }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="cart-content text-left">
                                                        <a href="{{ route('front_product',$row->id) }}" class="cart-title"> {{ $row->name }}</a>
                                                        <p class="qty">Qty: {{ $row->qty }}
                                                            <br><span>Rp {{ number_format($row->price,0,',','.') }}</span>
                                                        </p>
                                                    </div>
                                                    <div class="cart-remove">
                                                        <a href="#" class="action"><i class="fa fa-close"></i></a>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                            <div class="cart-pricing">
                                                <p class="shipping text-left">shipping :<span class="s-price">FREE</span></p>
                                                <p class="total text-left">total :<span class="p-total">Rp {{ \Cart::instance('cart')->total() }}</span></p>
                                            </div>
                                            <div class="cart-button">
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('cart.index') }}">View my cart <i class="fa fa-angle-right"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Checkout <i class="fa fa-angle-right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        @else
                                            <h3>Cart is empty</h3>
                                        @endif
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="setting-toggler setting-inner">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                    <div class="header-setting-inner">
                                        <ul>

                                            <li class="header-userinfo">
                                                    <ul class="first-step">
                                                        @if (Auth::guest())
                                                        <li><a href="{{ url('/login') }}">Login</a></li>
                                                        @else
                                                            <li><a href="#">My Account</a></li>
                                                            <li><a href="#">My checkout</a></li>
                                                            <li>
                                                                <a href="{{ url('/logout') }}"
                                                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                                    Logout
                                                                </a>

                                                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                                    {{ csrf_field() }}
                                                                </form>
                                                            </li>
                                                        @endif
                                                    </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- end nav item -->
                    </div>
                    <div class="mobile-menu hidden-md hidden-lg">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index-2.html">Home</a>
                                    <ul>
                                        <li><a href="index-2.html">home-1</a></li>
                                        <li><a href="index-3.html">home-2</a></li>
                                        <li><a href="index-4.html">home-3</a></li>
                                        <li><a href="index-5.html">home-4</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">men</a>
                                    <ul>
                                        <li><a href="#">men</a>
                                            <ul>
                                                <li><a href="#">jeckets</a></li>
                                                <li><a href="#">blazers</a></li>
                                                <li><a href="#">suits</a></li>
                                                <li><a href="#">trousers</a></li>
                                                <li><a href="#">jeans</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">women</a>
                                            <ul>
                                                <li><a href="#">tees & tanks</a></li>
                                                <li><a href="#">pants & jeans</a></li>
                                                <li><a href="#">skirts & dresses</a></li>
                                                <li><a href="#">accessories</a></li>
                                                <li><a href="#">shoes</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">accessories</a>
                                            <ul>
                                                <li><a href="#">bags</a></li>
                                                <li><a href="#">shoes</a></li>
                                                <li><a href="#">gift card</a></li>
                                                <li><a href="#">jewellery</a></li>
                                                <li><a href="#">jackets</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">women</a></li>
                                <li><a href="shop.html">Accessories</a></li>
                                <li><a href="#">blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Details</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="product-detail.html">Product Detail</a></li>
                                        <li><a href="cart.html">Cart page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- end menu area -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--header area end -->

@yield('content')

<!--start newsletter area -->
<section id="newsletter" class="section-newsletter-area">
    <div class="newsletter-area section-padding">
        <div class="container">
            <div class="row">
                <!-- start newsletter inner -->
                <div class="inner-newsletter">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <!--start newsletter title -->
                        <div class="newsletter-title">
                            <h2 class="signup"><span>SUBSCRIBE </span> FOR SPECIAL PROMOTIONS</h2>
                            <p>Get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        </div>
                        <!-- end newsletter title -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <!-- start signup form -->
                        <div class="signup-form">
                            <form action="{{ url('subscribe') }}" class="news-form" method="post">
                                {{ csrf_field() }}
                                <input type="number" class="f-form" name="no_hp" placeholder="Enter your phone number..." required>
                                <button class="submit text-uppercase">subscribe !</button>
                            </form>
                        </div>
                        <!--end signup form -->
                    </div>
                </div>
                <!-- end newsletter inner -->
            </div>
        </div>
    </div>
</section>
<!-- End newsletter area -->

<!--Start Footer area -->
<div class="footer-area">
    <!--start footer top area -->
    <div class="footer-top-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <div class="widget-area">
                        <h4 class="widget-title">Contact info</h4>
                        <div class="ad-marker">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <p>8901 Marmora Road, Glasgow D04 89 GR, New York</p>
                        <div class="ad-marker">
                            <i class="fa fa-phone"></i>
                        </div>
                        <p>Telephones: <a href="tel:+8801973833508">+88 01973-833508</a>
                        </p>
                        <div class="ad-marker">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <p> Email: <a href="mailto:admin@bootexperts.com ">admin@bootexperts.com </a></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                    <div class="widget-area widget-menu">
                        <h4 class="widget-title">MY ACCOUNT</h4>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">My Cart</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Checkout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="widget-area widget-menu">
                        <h4 class="widget-title">OUR SERVICE</h4>
                        <ul>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="#">Site map</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Custom service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="widget-area widget-menu">
                        <h4 class="widget-title">Support</h4>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Deliveru information</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Terms & conditions</a></li>
                            <li><a href="#">Support 24/7</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer bottom area -->
    <!-- start bottom area -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="copy-right-text">
                        <p>&copy; 2016 <a href="http://bootexperts.com/">Bootexperts.</a> All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="r-cards">
                        <a href="#"><img src="{{ url('assets/') }}/img/cards/discover.png" alt="discover"></a>
                        <a href="#"><img src="{{ url('assets/') }}/img/cards/express.png" alt="discover"></a>
                        <a href="#"><img src="{{ url('assets/') }}/img/cards/master-card.png" alt="discover"></a>
                        <a href="#"><img src="{{ url('assets/') }}/img/cards/paypal.png" alt="discover"></a>
                        <a href="#"><img src="{{ url('assets/') }}/img/cards/visa.png" alt="discover"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End footer bottom area -->
</div>
<!--End Footer area -->

<!-- Latest Jquery -->
<script src="{{ url('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- Nivo slider js -->
<script src="{{ url('assets/custom-slider/js/jquery.nivo.slider.js') }}"></script>
<script src="{{ url('assets/custom-slider/home.js') }}" type="text/javascript"></script>
<!-- Bootstrap js -->
<script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
<!-- owl-carousel js -->
<script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
<!-- jquery-ui js -->
<script src="{{ url('assets/js/jquery-ui.min.js') }}"></script>
<!-- Mobile menu js -->
<script src="{{ url('assets/js/jquery.meanmenu.js') }}"></script>
<!-- Scroll Up js -->
<script src="{{ url('assets/js/jquery.scrollUp.js') }}"></script>
<!-- Slick js -->
<script src="{{ url('assets/js/slick.min.js') }}"></script>
@stack('plugin_scripts')
<!-- Plugin js -->
<script src="{{ url('assets/js/plugins.js') }}"></script>
<!-- Main js -->
<script src="{{ url('assets/js/main.js') }}"></script>
@stack('scripts')
</body>

</html>