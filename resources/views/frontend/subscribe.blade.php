@extends('layouts.frontend')

@section('content')
    <!-- slider area start -->
    <div class="slider-area ">
        <div class="slider-content">
            <img src="{{ url('assets/img/slider-img/grid-baner.jpg') }}" alt="baner">
            <h1 class="cat-title text-center text-uppercase">Subscribe</h1>
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
                            <span class="s-cart">Subscribe</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Breadcumb area -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert"><h3>Thanks for subscribe!</h3></div>
            </div>
        </div>
    </div>
@endsection

@push('plugin_scripts')
@endpush

@push('scripts')
@endpush