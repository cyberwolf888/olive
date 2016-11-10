@extends('layouts.frontend')

@section('content')
    <!-- slider area start -->
    <div class="slider-area ">
        <div class="slider-content">
            <img src="{{ url('assets/img/slider-img/grid-baner.jpg') }}" alt="baner">
            <h1 class="cat-title text-center text-uppercase">New Item</h1>
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
                            <span class="s-cart">New Item</span>
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
                                @foreach(\App\Models\Category::all() as $category)
                                    <li>
                                        <a href="{{ route('category',$category->id) }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
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
                    </div>
                    <div class="tab-content-grid">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="grid">
                                <div class="shop-products clear row">
                                    @foreach($product as $row)
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-item clearfix">
                                                <div class="s-product-img">
                                                    @if($row->isSale == 1)
                                                        <div class="sticker-icon sale">
                                                            <span class="sticker-text">sale!</span>
                                                        </div>
                                                    @endif
                                                    <a class="primary-img" href="{{ url('product/'.$row->id) }}"><img src="{{ url('storage/app/'.\App\Models\Product::getImage($row->id)->image) }}" alt="">
                                                    </a>
                                                    <div class="choices">
                                                        <div class="global-table">
                                                            <div class="global-row">
                                                                <div class="global-cell">
                                                                    <div class="choice-icon">
                                                                        <ul>
                                                                            <li>
                                                                                <div class="icon-list">
                                                                                    <a href="{{ url('product/'.$row->id) }}"><span class="no"></span><i class="fa fa-shopping-cart"></i></a>
                                                                                    <a href="{{ url('product/'.$row->id) }}" class="modal-view detail-link quickview"><i class="fa fa-eye"></i></a>
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
                                                        <a href="{{ url('product/'.$row->id) }}">{{ $row->name }}</a>
                                                    </p>
                                                    <div class="product-price-area">
                                                    <span class="price">
                                                        @if($row->discount > 0)
                                                            <span class="n-amt">IDR {{ number_format($row->price-($row->price*$row->discount/100),0,',','.') }}</span>
                                                            <span><del>IDR {{ number_format($row->price,0,',','.') }}</del></span>
                                                        @else
                                                            <span class="n-amt">IDR {{ number_format($row->price,0,',','.') }}</span>
                                                        @endif
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="list-grid">
                                <div class="shop-products-list-grid">

                                    @foreach($product as $row)
                                        <div class="single-item list-grid clearfix">
                                            <div class="s-product-img">
                                                @if($row->isSale == 1)
                                                    <div class="sticker-icon sale">
                                                        <span class="sticker-text">sale!</span>
                                                    </div>
                                                @endif
                                                <a class="primary-img" href="{{ url('product/'.$row->id) }}"><img src="{{ url('storage/app/'.\App\Models\Product::getImage($row->id)->image) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <a href="{{ url('product/'.$row->id) }}">{{ $row->name }}</a>
                                                </p>
                                                <div class="product-price-area">
                                                <span class="price">
                                                    @if($row->discount > 0)
                                                        <span class="n-amt">IDR {{ number_format($row->price-($row->price*$row->discount/100),0,',','.') }}</span>
                                                        <span><del>IDR {{ number_format($row->price,0,',','.') }}</del></span>
                                                    @else
                                                        <span class="n-amt">IDR {{ number_format($row->price,0,',','.') }}</span>
                                                    @endif
                                                </span>
                                                </div>
                                                <div class="p-content clear">
                                                    <p class="content">{{ $row->description }} </p>
                                                </div>
                                                <div class="choices">
                                                    <div class="global-table">
                                                        <div class="global-row">
                                                            <div class="global-cell">
                                                                <div class="choice-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="icon-list">
                                                                                <a class="text-uppercase" href="{{ url('product/'.$row->id) }}"><span class="cart"></span>add to cart</a>
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
                                    @endforeach
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

@endsection

@push('plugin_scripts')
@endpush

@push('scripts')
@endpush