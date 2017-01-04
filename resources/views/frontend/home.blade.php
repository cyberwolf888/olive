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
                        <a href="{{ url('sale') }}" class="fn-button">shopping now</a>
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
                            <a href="{{ url('sale') }}" class="fn-button">shopping now</a>
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
                    <p class="info">Free shipping on all Indonesia order</p>
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
                        <div class="new-arrival-content row">
                            <div class="tab-content">
                                @foreach(\App\Models\Product::where('available',1)->orderby('id','DESC')->limit(8)->get() as $row)
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                                @if($row->isSale == 1)
                                                <div class="sticker-icon sale">
                                                    <span class="sticker-text">sale!</span>
                                                </div>
                                                @endif
                                                <!-- <div class="sticker-icon new">
                                                    <span class="sticker-text">new!</span>
                                                </div> -->
                                                <a class="primary-img" href="{{ url('product/'.$row->id) }}"><img src="{{ url('storage/app/'.\App\Models\Product::getImage($row->id)->image) }}" alt=""></a>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End section new arrivals products -->
@endsection