@extends('layouts.frontend')

@push('plugin_css')
    <link rel="stylesheet" href="{{ url('assets/lightbox2/dist/css/lightbox.min.css') }}">
@endpush

@section('content')
    <!-- slider area start -->
    <div class="slider-area " xmlns="http://www.w3.org/1999/html">
        <div class="slider-content">
            <img src="{{ url('assets/img/slider-img/grid-baner.jpg') }}" alt="baner">
            <h1 class="cat-title text-center text-uppercase">Product Details</h1>
        </div>
    </div>
    <!-- slider area end-->

    <!-- Breadcumb area start -->
    <div class="breadcumb-area detail">
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
                                <span class="home"> Product </span>
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <span class="s-cart">{{ $model->name }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Breadcumb area -->

    <div class="shop-product-area detail">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-xs-12">
                    <div class="shop-products">
                        <div class="single-item-detail clearfix">
                            <div class="product-thumbnail">
                                <div class="single-thumbnail-big">
                                    <a href="{{ url('assets') }}/img/products/detail-thumb.jpg" data-lightbox="{{ url('assets') }}/img/products/detail-thumb.jpg" data-title="High Neck Bodycon Dress">
                                        <img src="{{ url('assets') }}/img/products/detail-thumb.jpg" alt="">
                                    </a>
                                    <a href="{{ url('assets') }}/img/products/detail-1.jpg" data-lightbox="{{ url('assets') }}/img/products/detail-1.jpg" data-title="High Neck Bodycon Dress">
                                        <img src="{{ url('assets') }}/img/products/detail-1.jpg" alt="">
                                    </a>
                                    <a href="{{ url('assets') }}/img/products/detail-2.jpg" data-lightbox="{{ url('assets') }}/img/products/detail-2.jpg" data-title="High Neck Bodycon Dress">
                                        <img src="{{ url('assets') }}/img/products/detail-2.jpg" alt="">
                                    </a>
                                    <a href="{{ url('assets') }}/img/products/detail-thumb.jpg" data-lightbox="{{ url('assets') }}/img/products/detail-thumb.jpg" data-title="High Neck Bodycon Dress">
                                        <img src="{{ url('assets') }}/img/products/detail-thumb.jpg" alt="">
                                    </a>
                                    <a href="{{ url('assets') }}/img/products/detail-1.jpg" data-lightbox="{{ url('assets') }}/img/products/detail-1.jpg" data-title="High Neck Bodycon Dress">
                                        <img src="{{ url('assets') }}/img/products/detail-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="single-thumbnail-small row">
                                    <div class="1 single-thumb" data-slick-index="1">
                                        <img src="{{ url('assets') }}/img/products/thumb-1.jpg" alt="thumb1">
                                    </div>
                                    <div class="2 single-thumb" data-slick-index="2">
                                        <img src="{{ url('assets') }}/img/products/thumb-2.jpg" alt="thumb1">
                                    </div>
                                    <div class="3 single-thumb" data-slick-index="3">
                                        <img src="{{ url('assets') }}/img/products/thumb-3.jpg" alt="thumb1">
                                    </div>
                                    <div class="4 single-thumb" data-slick-index="4">
                                        <img src="{{ url('assets') }}/img/products/thumb-4.jpg" alt="thumb1">
                                    </div>
                                    <div class="5 single-thumb" data-slick-index="5">
                                        <img src="{{ url('assets') }}/img/products/thumb-3.jpg" alt="thumb1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-xs-12">
                    <div class="detail-product-info">
                        <p class="detail-product-title">
                            <a href="#">{{ $model->name }}</a>
                        </p>
                        <div class="detail-product-price-area">
                            <span class="price">
                                @if($model->discount > 0)
                                    <span class="n-amt">IDR {{ number_format($model->price-($model->price*$model->discount/100),0,',','.') }}</span>
                                    <span><del>IDR {{ number_format($model->price,0,',','.') }}</del></span>
                                @else
                                    <span class="n-amt">IDR {{ number_format($model->price,0,',','.') }}</span>
                                @endif
                            </span>

                        </div>
                        <div class="p-content clear">
                            <p class="content">
                                Availability: In stock
                                <br> Brand: Acer
                                <br>
                            </p>
                            <p class="d-content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                        <div class="cart-quantity">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                            </div>
                        </div>
                        <div class="detail-choices">
                            <div class="choice-icon">
                                <ul>
                                    <li>
                                        <a class="text-uppercase adtocart" href="#">add to cart</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="heart"><i class="pe-7s-like"></i></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="share-area clear">
                            <ul>
                                <li><h2 class="share">Share :</h2></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="categories-area">
                            <p class="category">
                                <span>Categories :</span>
                                Backpacks, Bags, Bucket Bags, clothings, Clutches, Crossbody Bags, Jackets & Coats, Jeans, Men, Pumps, Sandals, Shoes, Shorts, Sneakers, T-shirts, Wedges
                            </p>
                            <p class="tags"><span>Tags:</span> blouse, fashion</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cust-reviews-area detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-menu text-uppercase">
                        <ul>
                            <li role="presentation" class="active p-description">
                                <a href="#product-description" aria-controls="product-description" role="tab" data-toggle="tab">product description</a>
                            </li>
                            <li role="presentation" class="d-reviews">
                                <a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">reviews</a>
                            </li>
                            <li role="presentation" class="tags">
                                <a href="#tags" aria-controls="tags" role="tab" data-toggle="tab">tags</a>
                            </li>
                        </ul>
                    </div>
                    <div class="reviews-content">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="product-description">
                                <p class="r-content">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="reviews">
                                <p class="r-content">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="tags">
                                <p class="r-content">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('plugin_scripts')
    <script src="{{ url('assets/lightbox2/dist/js/lightbox.min.js') }}"></script>
@endpush
