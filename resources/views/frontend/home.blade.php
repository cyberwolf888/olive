@extends('layouts.frontend')

@section('content')
    <!-- slider area start -->
    <div class="slider-area home4 ">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider-4" class="slides">
                <img src="{{ url('assets/') }}/img/slider-img/01_home-4.jpg" alt="s-1" title="#slider-direction-1" />
                <img src="{{ url('assets/') }}/img/slider-img/02_home-4.jpg" alt="s-2" title="#slider-direction-2" />
            </div>
            <!-- direction 1 -->
            <div id="slider-direction-1" class="t-cn slider-direction">
                <div class="slider-content t-cn s-tb slider-1">
                    <div class="title-container s-tb-c title-compress">
                        <div class="layear-1-1">
                            <h1>A BRAND NEW ARRIVALS</h1>
                        </div>
                        <div class="layear-1-2">
                            <h2>Minimal & Modern look </h2>
                        </div>
                        <!-- <div class="b-text">collection</div>  -->
                        <a href="#" class="fn-button">shopping now</a>
                    </div>
                </div>
            </div>
            <!-- direction 2 -->
            <div id="slider-direction-2" class="t-cn slider-direction">
                <div class="slider-content t-cn s-tb slider-2">
                    <div class="title-container s-tb-c title-compress text-uppercase">
                        <div class="layear-1-2 b-layer t-lft t-pad">
                            <p class="looking">looking for</p>
                            <h1>lookbook <br> fashion fall.</h1>
                            <p class="hugo">Huge sale up to 70% off</p>
                        </div>
                        <!--  <div class="layear-1-2"><h2>Minimal & Modern look </h2></div> -->
                        <!-- <div class="b-text">collection</div> -->
                        <div class="shop-btn bt-lft">
                            <a href="#" class="fn-button">shopping now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider area end-->

    <!--Start Service icon -->
    <section id="Service-icon" class="section-service-icon-area home4 section-padding">
        <div class="container">
            <div class="row">
                <!-- start service Icon image -->
                <div class="free-shiping col-sm-3 col-xs-12">
                    <div class="fc-icon">
                        <a href="#"><i class="pe-7s-world"></i></a>
                    </div>
                    <h2 class="shipping-title"><a href="#">FREE SHIPPING</a></h2>
                    <p class="info">Free shipping on all UK order</p>
                </div>
                <div class="free-shiping col-sm-3 col-xs-12">
                    <div class="fc-icon">
                        <a href="#"><i class="pe-7s-refresh"></i></a>
                    </div>
                    <h2 class="shipping-title"><a href="#">FREE EXCHANGE</a></h2>
                    <p class="info">30 days return on all items</p>
                </div>
                <div class="free-shiping col-sm-3 col-xs-12">
                    <div class="fc-icon">
                        <a href="#"><i class="pe-7s-headphones"></i></a>
                    </div>
                    <h2 class="shipping-title"><a href="#">PREMIUM SUPPORT</a></h2>
                    <p class="info">We support online 24 hours a day</p>
                </div>
                <div class="free-shiping no-margin col-sm-3 col-xs-12">
                    <div class="fc-icon">
                        <a href="#"><i class="pe-7s-gift"></i></a>
                    </div>
                    <h2 class="shipping-title"><a href="#">BLACK FRIDAY</a></h2>
                    <p class="info">Shocking discount on every friday</p>
                </div>
                <!--End service icon image-->
            </div>
        </div>
    </section>
    <!--End Service icon-->

    <!-- banner area sart -->
    <section id="banner" class="section-banner-area home4">
        <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <!-- left side single banner -->
                        <div class="single-banner">
                            <div class="top-image l-top-img">
                                <a href="#" class="single-image">
                                    <img src="{{ url('assets/img/banner/01_home-4.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="bottom-image l-long-img">
                                <a href="#" class="single-image">
                                    <img class="left-b-img" src="{{ url('assets/img/banner/02_home-4.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- End left side single banner -->
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <!-- left side single banner -->
                        <div class="single-banner">
                            <div class="top-image">
                                <a href="#" class="single-image r-top-image">
                                    <img src="{{ url('assets/img/banner/03_home-4.jpg') }}" alt="">
                                    <h2 class="c-text text-uppercase">new <br> trends <br> for women</h2>
                                    <p class="shop-now text-uppercase">shop now</p>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="bottom-image">
                                        <a href="#" class="single-image">
                                            <img class="cen-b-img" src="{{ url('assets/img/banner/04_home-4.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="bottom-image no-margin">
                                        <a href="#" class="single-image">
                                            <img class="cen-br-img" src="{{ url('assets/img/banner/05_home-4.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End left side single banner -->
                </div>
            </div>
        </div>
    </section>
    <!-- end banner area -->

    <!-- section new arrivals products -->
    <section id="new-arrivals" class="section-new-arrivals home4 section-padding">
        <div class="new-arrival-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!--Product new arrivals title -->
                        <div class="section-title text-center text-uppercase">
                            <h2 class="n-arrival"><span>new arrivals</span></h2>
                        </div>
                        <!-- End arrivals title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <!-- Product tab list -->
                        <div class="product-menu">
                            <ul>
                                <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">All</a></li>
                                <li role="presentation"><a href="#accesories" aria-controls="accesories" role="tab" data-toggle="tab">Accesories</a></li>
                                <li role="presentation"><a href="#clothing" aria-controls="clothing" role="tab" data-toggle="tab">Clothing</a></li>
                                <li role="presentation"><a href="#handbags" aria-controls="handbags" role="tab" data-toggle="tab">Handbags</a></li>
                                <li role="presentation"><a href="#shoes" aria-controls="shoes" role="tab" data-toggle="tab">Shoes</a></li>
                            </ul>
                        </div>
                        <!-- End tab list -->
                        <div class="new-arrival-content row">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="all">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                                <div class="sticker-icon sale">
                                                    <span class="sticker-text">sale!</span>
                                                </div>
                                                <a class="primary-img" href="#"><img src="{{ url('assets') }}/img/products/1.jpg" alt=""></a>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a href="#"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                                <a href="#"><span class="no"></span><i class="fa fa-square-o"></i></a>
                                                                                <a href="#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="#">Sleeve High Neck Bodycon Dress</a>
                                                </p>
                                                <div class="product-price-area">
                                                    <span class="price">
                                                        <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                    </span>
                                                    <div class="star-rating">
                                                        <ul>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                                <a class="primary-img" href="#"><img src="{{ url('assets') }}/img/products/2.jpg" alt=""></a>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a href="#"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                                <a href="#"><span class="no"></span><i class="fa fa-square-o"></i></a>
                                                                                <a href="#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="#">Sleeve High Neck Bodycon Dress</a>
                                                </p>
                                                <div class="product-price-area">
                                                    <span class="price">
                                                        <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                    </span>
                                                    <div class="star-rating">
                                                        <ul>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                                <div class="sticker-icon new">
                                                    <span class="sticker-text">new!</span>
                                                </div>
                                                <a class="primary-img" href="#"><img src="{{ url('assets') }}/img/products/1.jpg" alt=""></a>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a href="#"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                                <a href="#"><span class="no"></span><i class="fa fa-square-o"></i></a>
                                                                                <a href="#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="#">Sleeve High Neck Bodycon Dress</a>
                                                </p>
                                                <div class="product-price-area">
                                                    <span class="price">
                                                        <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                    </span>
                                                    <div class="star-rating">
                                                        <ul>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                                <a class="primary-img" href="#"><img src="{{ url('assets') }}/img/products/2.jpg" alt=""></a>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a href="#"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                                <a href="#"><span class="no"></span><i class="fa fa-square-o"></i></a>
                                                                                <a href="#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="#">Sleeve High Neck Bodycon Dress</a>
                                                </p>
                                                <div class="product-price-area">
                                                    <span class="price">
                                                        <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                    </span>
                                                    <div class="star-rating">
                                                        <ul>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="accesories">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                                <div class="sticker-icon new">
                                                    <span class="sticker-text">new!</span>
                                                </div>
                                                <a class="primary-img" href="#"><img src="{{ url('assets') }}/img/products/1.jpg" alt=""></a>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a href="#"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                                <a href="#"><span class="no"></span><i class="fa fa-square-o"></i></a>
                                                                                <a href="#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="#">Sleeve High Neck Bodycon Dress</a>
                                                </p>
                                                <div class="product-price-area">
                                                    <span class="price">
                                                        <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                    </span>
                                                    <div class="star-rating">
                                                        <ul>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                                <a class="primary-img" href="#"><img src="{{ url('assets') }}/img/products/2.jpg" alt=""></a>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a href="#"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                                <a href="#"><span class="no"></span><i class="fa fa-square-o"></i></a>
                                                                                <a href="#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="#">Sleeve High Neck Bodycon Dress</a>
                                                </p>
                                                <div class="product-price-area">
                                                    <span class="price">
                                                        <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                    </span>
                                                    <div class="star-rating">
                                                        <ul>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                                <a class="primary-img" href="#"><img src="{{ url('assets') }}/img/products/2.jpg" alt=""></a>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a href="#"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                                <a href="#"><span class="no"></span><i class="fa fa-square-o"></i></a>
                                                                                <a href="#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="#">Sleeve High Neck Bodycon Dress</a>
                                                </p>
                                                <div class="product-price-area">
                                                    <span class="price">
                                                        <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                    </span>
                                                    <div class="star-rating">
                                                        <ul>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                                <div class="sticker-icon new">
                                                    <span class="sticker-text">new!</span>
                                                </div>
                                                <a class="primary-img" href="#"><img src="{{ url('assets') }}/img/products/1.jpg" alt=""></a>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a href="#"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                                <a href="#"><span class="no"></span><i class="fa fa-square-o"></i></a>
                                                                                <a href="#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="#">Sleeve High Neck Bodycon Dress</a>
                                                </p>
                                                <div class="product-price-area">
                                                    <span class="price">
                                                        <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                    </span>
                                                    <div class="star-rating">
                                                        <ul>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="clothing">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                                <a class="primary-img" href="#"><img src="{{ url('assets') }}/img/products/1.jpg" alt=""></a>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a href="#"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                                <a href="#"><span class="no"></span><i class="fa fa-square-o"></i></a>
                                                                                <a href="#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="#">Sleeve High Neck Bodycon Dress</a>
                                                </p>
                                                <div class="product-price-area">
                                                    <span class="price">
                                                        <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                    </span>
                                                    <div class="star-rating">
                                                        <ul>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                                <div class="sticker-icon sale">
                                                    <span class="sticker-text">sale!</span>
                                                </div>
                                                <a class="primary-img" href="#"><img src="{{ url('assets') }}/img/products/1.jpg" alt=""></a>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a href="#"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                                <a href="#"><span class="no"></span><i class="fa fa-square-o"></i></a>
                                                                                <a href="#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="#">Sleeve High Neck Bodycon Dress</a>
                                                </p>
                                                <div class="product-price-area">
                                                    <span class="price">
                                                        <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                    </span>
                                                    <div class="star-rating">
                                                        <ul>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                                <!--<div class="sticker-icon">
                                                    <span class="sticker-text">sale!</span>
                                                </div> -->
                                                <a class="primary-img" href="#"><img src="{{ url('assets') }}/img/products/2.jpg" alt=""></a>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a href="#"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                                <a href="#"><span class="no"></span><i class="fa fa-square-o"></i></a>
                                                                                <a href="#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="#">Sleeve High Neck Bodycon Dress</a>
                                                </p>
                                                <div class="product-price-area">
                                                    <span class="price">
                                                        <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                    </span>
                                                    <div class="star-rating">
                                                        <ul>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                                <a class="primary-img" href="#"><img src="{{ url('assets') }}/img/products/1.jpg" alt=""></a>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a href="#"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                                <a href="#"><span class="no"></span><i class="fa fa-square-o"></i></a>
                                                                                <a href="#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="#">Sleeve High Neck Bodycon Dress</a>
                                                </p>
                                                <div class="product-price-area">
                                                    <span class="price">
                                                        <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                    </span>
                                                    <div class="star-rating">
                                                        <ul>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="handbags">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                                <div class="sticker-icon sale">
                                                    <span class="sticker-text">sale!</span>
                                                </div>
                                                <a class="primary-img" href="#"><img src="{{ url('assets') }}/img/products/1.jpg" alt=""></a>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a href="#"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                                <a href="#"><span class="no"></span><i class="fa fa-square-o"></i></a>
                                                                                <a href="#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="#">Sleeve High Neck Bodycon Dress</a>
                                                </p>
                                                <div class="product-price-area">
                                                    <span class="price">
                                                        <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                    </span>
                                                    <div class="star-rating">
                                                        <ul>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                                <div class="sticker-icon sale">
                                                    <span class="sticker-text">sale!</span>
                                                </div>
                                                <a class="primary-img" href="#"><img src="{{ url('assets') }}/img/products/2.jpg" alt=""></a>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a href="#"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                                <a href="#"><span class="no"></span><i class="fa fa-square-o"></i></a>
                                                                                <a href="#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="#">Sleeve High Neck Bodycon Dress</a>
                                                </p>
                                                <div class="product-price-area">
                                                    <span class="price">
                                                        <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                    </span>
                                                    <div class="star-rating">
                                                        <ul>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                                <a class="primary-img" href="#"><img src="{{ url('assets') }}/img/products/2.jpg" alt=""></a>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a href="#"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                                <a href="#"><span class="no"></span><i class="fa fa-square-o"></i></a>
                                                                                <a href="#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="#">Sleeve High Neck Bodycon Dress</a>
                                                </p>
                                                <div class="product-price-area">
                                                    <span class="price">
                                                        <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                    </span>
                                                    <div class="star-rating">
                                                        <ul>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                                <div class="sticker-icon new">
                                                    <span class="sticker-text">new!</span>
                                                </div>
                                                <a class="primary-img" href="#"><img src="{{ url('assets') }}/img/products/1.jpg" alt=""></a>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a href="#"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                                <a href="#"><span class="no"></span><i class="fa fa-square-o"></i></a>
                                                                                <a href="#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="#">Sleeve High Neck Bodycon Dress</a>
                                                </p>
                                                <div class="product-price-area">
                                                    <span class="price">
                                                        <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                    </span>
                                                    <div class="star-rating">
                                                        <ul>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="shoes">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                                <div class="sticker-icon new">
                                                    <span class="sticker-text">new!</span>
                                                </div>
                                                <a class="primary-img" href="#"><img src="{{ url('assets') }}/img/products/1.jpg" alt=""></a>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a href="#"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                                <a href="#"><span class="no"></span><i class="fa fa-square-o"></i></a>
                                                                                <a href="#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="#">Sleeve High Neck Bodycon Dress</a>
                                                </p>
                                                <div class="product-price-area">
                                                    <span class="price">
                                                        <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                    </span>
                                                    <div class="star-rating">
                                                        <ul>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                                <div class="sticker-icon new">
                                                    <span class="sticker-text">new!</span>
                                                </div>
                                                <a class="primary-img" href="#"><img src="{{ url('assets') }}/img/products/1.jpg" alt=""></a>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a href="#"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                                <a href="#"><span class="no"></span><i class="fa fa-square-o"></i></a>
                                                                                <a href="#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="#">Sleeve High Neck Bodycon Dress</a>
                                                </p>
                                                <div class="product-price-area">
                                                    <span class="price">
                                                        <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                    </span>
                                                    <div class="star-rating">
                                                        <ul>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                                <a class="primary-img" href="#"><img src="{{ url('assets') }}/img/products/2.jpg" alt=""></a>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a href="#"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                                <a href="#"><span class="no"></span><i class="fa fa-square-o"></i></a>
                                                                                <a href="#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="#">Sleeve High Neck Bodycon Dress</a>
                                                </p>
                                                <div class="product-price-area">
                                                    <span class="price">
                                                        <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                    </span>
                                                    <div class="star-rating">
                                                        <ul>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                                <div class="sticker-icon sale">
                                                    <span class="sticker-text">sale!</span>
                                                </div>
                                                <a class="primary-img" href="#"><img src="{{ url('assets') }}/img/products/1.jpg" alt=""></a>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a href="#"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                                <a href="#"><span class="no"></span><i class="fa fa-square-o"></i></a>
                                                                                <a href="#" class="modal-view detail-link quickview" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="#">Sleeve High Neck Bodycon Dress</a>
                                                </p>
                                                <div class="product-price-area">
                                                    <span class="price">
                                                        <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                    </span>
                                                    <div class="star-rating">
                                                        <ul>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End section new arrivals products -->
@endsection