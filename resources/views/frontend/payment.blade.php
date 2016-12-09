@extends('layouts.frontend')

@section('content')
    <!-- slider area start -->
    <div class="slider-area ">
        <div class="slider-content">
            <img src="{{ url('assets/img/slider-img/grid-baner.jpg') }}" alt="baner">
            <h1 class="cat-title text-center text-uppercase">Payment</h1>
        </div>
    </div>
    <!-- slider area end-->

    <!-- Breadcumb area start -->
    <div class="breadcumb-area detail chk-page">
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
                                <span class="home"> Cart </span>
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <span class="s-cart">Payment</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Breadcumb area -->

    <!--Start Checkout information area -->
    <div class="checkout-area chk-page">
        <div class="container">
            @if (session('success'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                </div>
            </div>
            @endif
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 contact-info">
                    <div class="contact-info">
                        <h3>1. Fund Transfer</h3>
                        <p>Please do fund transfer to one of the existing bank account below.</p>
                        <ul>
                            <li>
                                <i class="fa fa-university" aria-hidden="true"></i> <strong>Bank Central Asia (BCA)</strong>
                            </li>
                            <li>
                                <i class="fa fa-bookmark" aria-hidden="true"></i> 7725-142-048
                            </li>
                            <li>
                                <i class="fa fa-user" aria-hidden="true"></i>  Olive
                            </li>
                        </ul>
                        <div class="clearfix"></div> <br>
                        <ul>
                            <li>
                                <i class="fa fa-university" aria-hidden="true"></i> <strong>Bank Mandiri</strong>
                            </li>
                            <li>
                                <i class="fa fa-bookmark" aria-hidden="true"></i> 90000-1367-4529
                            </li>
                            <li>
                                <i class="fa fa-user" aria-hidden="true"></i>  Olive
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="contact-form">
                        <h3>2. Confirm Transfer</h3>
                        {!! Form::open(['route' => 'cart.payment.proses', 'method' => 'post', 'files' => true]) !!}
                            <div class="col-md-8 col-sm-6 col-xs-12">
                                <label for="invoice">Invoice</label>
                                {!! Form::select('invoice', $invoice, null,['class'=>'form-control','required']) !!}
                            </div>
                            <div class="col-md-8 col-sm-6 col-xs-12">
                                <label for="proof">Proof of payment</label>
                                <input type="file" id="proof" name="proof" required>
                                <p class="help-block">Max file size 3MB, Format image file only.</p>
                            </div>
                            <div class="col-md-8 col-sm-6 col-xs-12">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Checkout information area -->


@endsection

@push('plugin_scripts')
@endpush

@push('scripts')
@endpush