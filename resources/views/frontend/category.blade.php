@extends('layouts.frontend')

@section('content')
    <!-- slider area start -->
    <div class="slider-area ">
        <div class="slider-content">
            <img src="{{ url('assets/img/slider-img/grid-baner.jpg') }}" alt="baner">
            <h1 class="cat-title text-center text-uppercase">Cart</h1>
        </div>
    </div>
    <!-- slider area end-->

    <!-- Breadcumb area start -->
    <div class="breadcumb-area detail cart-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcumb">
                        <p class="b-men">
                            <a href="#"><i class="fa fa-home"></i>
                                <span class="home">Home</span>
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <a href="#">
                                <span class="home"> Shop </span>
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <span class="s-cart">Shopping cart</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Breadcumb area -->

    <div class="shop-product-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-3 col-sm-4">
                    <div class="shop-sidebar">
                        <div class="shop-single-sidebar shop-category">
                            <h2>Categories</h2>
                            <ul>
                                <li><a href="#">Categories 01 (1)</a>
                                </li>
                                <li><a href="#">Categories 02 (3)</a>
                                </li>
                                <li><a href="#">Categories 02 (3)</a>
                                </li>
                                <li><a href="#">Categories 02 (3)</a>
                                </li>
                                <li><a href="#">Categories 02 (3)</a>
                                </li>
                                <li><a href="#">Categories 02 (3)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-single-sidebar price-filter">
                            <h2 class="wedget-title">Price filter</h2>
                            <div class="price-filter">
                                <div id="slider-range"></div>
                                <div class="price_slider_amount">
                                    <input type="text" placeholder="Add Your Price" name="price" id="amount" />
                                    <input type="submit" value="Filter" />
                                </div>
                            </div>
                        </div>
                        <div class="shop-single-sidebar manufacturer">
                            <h2>manufacturer</h2>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Calvin Klein (1)</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Diesel (3)</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Polo (2)</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Tommy Hilfiger (3)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-single-sidebar color">
                            <h2>Color</h2>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Black (1)</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Blue (2)</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Green (1)</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Grey (1)</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Red (2)</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>White (3)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-single-sidebar compare">
                            <h2 class="comp">Compare</h2>
                            <ul>
                                <li><a href="#">Sleeve High Neck Bodycon <i class="fa fa-trash"></i></a>
                                </li>
                                <li><a href="#">Sleeve High Neck Bodycon <i class="fa fa-trash"></i></a>
                                </li>
                                <li><a href="#">Sleeve High Neck Bodycon <i class="fa fa-trash"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-9 col-sm-8">
                    <div class="shop-tool-bar fix">
                        <div class="view-mode">
                            <!-- <a href="#" class="active"><i class="fa fa-th"></i></a>
                                <a href="#" class="list"><i class="fa fa-th-list"></i></a> -->
                            <div class="product-menu-tab text-uppercase">
                                <ul>

                                    <li role="presentation" class="active p-description"><a href="#grid" aria-controls="grid" role="tab" data-toggle="tab"><i class="fa fa-th"></i></a>
                                    </li>
                                    <li role="presentation" class=" d-reviews"><a href="#list-grid" aria-controls="list-grid" role="tab" data-toggle="tab"><i class="fa fa-th-list"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="show-product">
                            <span>View</span>
                            <select name="sort-by">
                                <option selected="selected" value="shirt">9</option>
                                <option value="shorts">10</option>
                                <option value="pants">14</option>
                            </select>
                        </div>
                        <div class="sort-by">
                            <span>Sort By :</span>
                            <select name="sort-by">
                                <option selected="selected" value="mercede">Default</option>
                                <option value="saab">price(low&gt;high)</option>
                                <option value="mercedes">price(high &gt; low)</option>
                                <option value="audi">rating(highest)</option>
                            </select>
                        </div>
                    </div>
                    <div class="tab-content-grid">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="grid">
                                <div class="shop-products clear row">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="single-item clearfix">
                                            <div class="s-product-img">
                                                <div class="sticker-icon sale">
                                                    <span class="sticker-text">sale!</span>
                                                </div>
                                                <a class="primary-img" href="#"><img src="img/products/1.jpg" alt="">
                                                </a>
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
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="single-item clearfix">
                                            <div class="s-product-img">
                                                <!--<div class="sticker-icon">
                                                        <span class="sticker-text">sale!</span>
                                                    </div> -->
                                                <a class="primary-img" href="#"><img src="img/products/2.jpg" alt="">
                                                </a>
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
                                                                                <a href="#"><span class="no"></span><i class="fa fa-clone"></i></a>
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
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="single-item clearfix">
                                            <div class="s-product-img">
                                                <div class="sticker-icon new">
                                                    <span class="sticker-text">new!</span>
                                                </div>
                                                <a class="primary-img" href="#"><img src="img/products/3.jpg" alt="">
                                                </a>
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
                                                                                <a href="#"><span class="no"></span><i class="fa fa-clone"></i></a>
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
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="single-item clearfix">
                                            <div class="s-product-img">
                                                <!--<div class="sticker-icon">
                                                        <span class="sticker-text">sale!</span>
                                                    </div> -->
                                                <a class="primary-img" href="#"><img src="img/products/4.jpg" alt="">
                                                </a>
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
                                                                                <a href="#"><span class="no"></span><i class="fa fa-clone"></i></a>
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
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="single-item clearfix">
                                            <div class="s-product-img">
                                                <div class="sticker-icon sale">
                                                    <span class="sticker-text">sale!</span>
                                                </div>
                                                <a class="primary-img" href="#"><img src="img/products/5.jpg" alt="">
                                                </a>
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
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="single-item clearfix">
                                            <div class="s-product-img">
                                                <!--<div class="sticker-icon">
                                                        <span class="sticker-text">sale!</span>
                                                    </div> -->
                                                <a class="primary-img" href="#"><img src="img/products/6.jpg" alt="">
                                                </a>
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
                                                                                <a href="#"><span class="no"></span><i class="fa fa-clone"></i></a>
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
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="single-item clearfix">
                                            <div class="s-product-img">
                                                <!--<div class="sticker-icon">
                                                        <span class="sticker-text">sale!</span>
                                                    </div> -->
                                                <a class="primary-img" href="#"><img src="img/products/7.jpg" alt="">
                                                </a>
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
                                                                                <a href="#"><span class="no"></span><i class="fa fa-clone"></i></a>
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
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="single-item clearfix">
                                            <div class="s-product-img">
                                                <div class="sticker-icon sale">
                                                    <span class="sticker-text">sale!</span>
                                                </div>
                                                <a class="primary-img" href="#"><img src="img/products/8.jpg" alt="">
                                                </a>
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
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 hidden-sm col-xs-12">
                                        <div class="single-item clearfix">
                                            <div class="s-product-img">
                                                <!--<div class="sticker-icon">
                                                        <span class="sticker-text">sale!</span>
                                                    </div> -->
                                                <a class="primary-img" href="#"><img src="img/products/1.jpg" alt="">
                                                </a>
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
                                                                                <a href="#"><span class="no"></span><i class="fa fa-clone"></i></a>
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
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                            <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="list-grid">
                                <div class="shop-products-list-grid">

                                    <div class="single-item list-grid clearfix">
                                        <div class="s-product-img">
                                            <div class="sticker-icon sale">
                                                <span class="sticker-text">sale!</span>
                                            </div>
                                            <a class="primary-img" href="#"><img src="img/products/1.jpg" alt="">
                                            </a>
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
                                                        <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="reviews"><a href="#">10 reviews(s)</a>
                                                        </li>
                                                        <li class="add-reviews"><a href="#">Add Your Review</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-content clear">
                                                <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                            </div>
                                            <div class="choices">
                                                <div class="global-table">
                                                    <div class="global-row">
                                                        <div class="global-cell">
                                                            <div class="choice-icon">
                                                                <ul>
                                                                    <li>
                                                                        <div class="icon-list">
                                                                            <a class="text-uppercase" href="#"><span class="cart"></span>add to cart</a>
                                                                            <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                            <a href="#"><span class="no"></span><i class="fa fa-clone"></i></a>
                                                                            <a href="#"><span class="no"></span><i class="fa fa-envelope-o"></i></a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item list-grid clearfix">
                                        <div class="s-product-img">
                                            <div class="sticker-icon sale">
                                                <span class="sticker-text">sale!</span>
                                            </div>
                                            <a class="primary-img" href="#"><img src="img/products/2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <p class="product-title">
                                                <a href="#">Sleeve Low Neck Bodycon Dress</a>
                                            </p>
                                            <div class="product-price-area">
                                                <span class="price">
                                                    <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                </span>
                                                <div class="star-rating">
                                                    <ul>
                                                        <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="reviews"><a href="#">10 reviews(s)</a>
                                                        </li>
                                                        <li class="add-reviews"><a href="#">Add Your Review</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-content clear">
                                                <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                            </div>
                                            <div class="choices">
                                                <div class="global-table">
                                                    <div class="global-row">
                                                        <div class="global-cell">
                                                            <div class="choice-icon">
                                                                <ul>
                                                                    <li>
                                                                        <div class="icon-list">
                                                                            <a class="text-uppercase" href="#"><span class="cart"></span>add to cart</a>
                                                                            <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                            <a href="#"><span class="no"></span><i class="fa fa-clone"></i></a>
                                                                            <a href="#"><span class="no"></span><i class="fa fa-envelope-o"></i></a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item list-grid clearfix">
                                        <div class="s-product-img">
                                            <div class="sticker-icon sale">
                                                <span class="sticker-text">sale!</span>
                                            </div>
                                            <a class="primary-img" href="#"><img src="img/products/3.jpg" alt="">
                                            </a>
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
                                                        <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="reviews"><a href="#">10 reviews(s)</a>
                                                        </li>
                                                        <li class="add-reviews"><a href="#">Add Your Review</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-content clear">
                                                <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                            </div>
                                            <div class="choices">
                                                <div class="global-table">
                                                    <div class="global-row">
                                                        <div class="global-cell">
                                                            <div class="choice-icon">
                                                                <ul>
                                                                    <li>
                                                                        <div class="icon-list">
                                                                            <a class="text-uppercase" href="#"><span class="cart"></span>add to cart</a>
                                                                            <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                            <a href="#"><span class="no"></span><i class="fa fa-clone"></i></a>
                                                                            <a href="#"><span class="no"></span><i class="fa fa-envelope-o"></i></a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item list-grid clearfix">
                                        <div class="s-product-img">
                                            <div class="sticker-icon sale">
                                                <span class="sticker-text">sale!</span>
                                            </div>
                                            <a class="primary-img" href="#"><img src="img/products/4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <p class="product-title">
                                                <a href="#">Sleeve Medium Neck Bodycon Dress</a>
                                            </p>
                                            <div class="product-price-area">
                                                <span class="price">
                                                    <span class="n-amt">$160.00</span><span><del>$160.00</del></span>
                                                </span>
                                                <div class="star-rating">
                                                    <ul>
                                                        <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="star yes"><i class="fa fa-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="star no"><i class="fa fa-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="reviews"><a href="#">10 reviews(s)</a>
                                                        </li>
                                                        <li class="add-reviews"><a href="#">Add Your Review</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-content clear">
                                                <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                            </div>
                                            <div class="choices">
                                                <div class="global-table">
                                                    <div class="global-row">
                                                        <div class="global-cell">
                                                            <div class="choice-icon">
                                                                <ul>
                                                                    <li>
                                                                        <div class="icon-list">
                                                                            <a class="text-uppercase" href="#"><span class="cart"></span>add to cart</a>
                                                                            <a href="#"><span class="yes"></span><i class="fa fa-heart-o"></i></a>
                                                                            <a href="#"><span class="no"></span><i class="fa fa-clone"></i></a>
                                                                            <a href="#"><span class="no"></span><i class="fa fa-envelope-o"></i></a>
                                                                        </div>
                                                                    </li>
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
                    <div class="col-md-12">

                        <div class="page-navigation">
                            {{ $product->links() }}
                            <!-- <ul class="navi">
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li class="2">
                                    <a href="#">2</a>
                                </li>
                                <li class="3">
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a class="double-angle" href="#">
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </li>
                            </ul> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--start Brand logo -->
    <div class="section-brand-logo-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <hr>
                    <!-- start brand logo image -->
                    <div class="logo-carousel owl-carousel section-padding">
                        <div class="brand-item">
                            <a href="#">
                                <img src="img/brand-logo/1.png" alt="brand-logo" />
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="img/brand-logo/2.png" alt="brand-logo" />
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="img/brand-logo/3.png" alt="brand-logo" />
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="img/brand-logo/4.png" alt="brand-logo" />
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="img/brand-logo/5.png" alt="brand-logo" />
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="img/brand-logo/1.png" alt="brand-logo" />
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="img/brand-logo/2.png" alt="brand-logo" />
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="img/brand-logo/3.png" alt="brand-logo" />
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="img/brand-logo/4.png" alt="brand-logo" />
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="img/brand-logo/5.png" alt="brand-logo" />
                            </a>
                        </div>
                    </div>
                    <!--End brand logo image -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand logo -->
@endsection

@push('plugin_scripts')
@endpush

@push('scripts')
@endpush