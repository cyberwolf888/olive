@extends('layouts.frontend')

@section('content')
    <!-- slider area start -->
    <div class="slider-area ">
        <div class="slider-content">
            <img src="{{ url('assets/img/slider-img/grid-baner.jpg') }}" alt="baner">
            <h1 class="cat-title text-center text-uppercase">Checkout</h1>
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
                            <span class="s-cart">Checkout</span>
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
            <div class="row">
                {!! Form::open(['route' => 'cart.checkout.process', 'method' => 'post']) !!}
                <div class="col-md-9">
                    <div class="panel-group information-area" id="checkout-progress">
                        <div class="panel panel-default information">
                            <div class="panel-heading" >
                                <a class="active btn bill-info text-uppercase" data-toggle="collapse" data-parent="#checkout-progress" href="#check-meth"><span>1</span>BILLING INFORMATION</a>
                            </div>
                            <div id="check-meth" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="bill-information">
                                        <form action="#">
                                            <div class="form">
                                                <div class="card-control">
                                                    <ul>
                                                        <li>
                                                            <div class="field fix">
                                                                <div class="input-box">
                                                                    <label class="label" for="first">Full Name <em>*</em></label>
                                                                    <input type="text" class=" border-color" id="fullname" name="fullname" value="{{ old('fullname')=='' ? $model->member->fullname : old('fullname') }}">
                                                                </div>
                                                                <div class="input-box">
                                                                    <label class="label" for="middle">Phone Number <em>*</em></label>
                                                                    <input type="text" class=" border-color" id="phone" name="phone" value="{{ old('phone')=='' ? $model->member->phone  : old('phone') }}">
                                                                </div>
                                                                <div class="input-box">
                                                                    <label class="label">Email Address <em>*</em></label>
                                                                    <input type="email" class=" border-color" name="email" value="{{ old('email')=='' ? $model->email : old('email') }}"/>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="field fix">
                                                                <div class="input-box inhun">
                                                                    <label class="label" for="addr">Address <em>*</em></label>
                                                                    <input type="text" class=" border-color" id="address" name="address" value="{{ old('address')=='' ? $model->member->address : old('address') }}"/>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="field fix">
                                                                <div class="input-box">
                                                                    <label class="label">Zip/Postal Code <em>*</em></label>
                                                                    <input type="text" class=" border-color" id="zip_code" name="zip_code" value="{{ old('zip_code')=='' ? $model->member->zip_code : old('zip_code') }}">
                                                                </div>
                                                                <div class="input-box">
                                                                    <label class="label">State<em>*</em></label>
                                                                    <input type="text" class=" border-color" id="state" name="state" value="{{ old('state')=='' ? $model->member->state : old('state') }}">
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default information">
                            <div class="panel-heading" >
                                <a class="collapsed btn bill-info text-uppercase" data-toggle="collapse" data-parent="#checkout-progress" href="#ship-info"><span>2</span>SHIPPING METHOD</a>
                            </div>
                            <div id="ship-info" class="panel-collapse collapse detail-content">
                                <div class="panel-body">
                                    <div class="bill-information clearfix">
                                        <div class="flatrate">
                                            <p>FREE Delivery</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default information">
                            <div class="panel-heading" >
                                <a class="collapsed btn bill-info text-uppercase" data-toggle="collapse" data-parent="#checkout-progress" href="#pay-info"><span>3</span>PAYMENT METHOD</a>
                            </div>
                            <div id="pay-info" class="panel-collapse collapse detail-content">
                                <div class="panel-body">
                                    <div class="billing-information clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="flatrate">

                                                <p>
                                                    <input type="radio" id="credit"/>
                                                    <label for="Credit">Transfer Bank</label>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default information">
                            <div class="panel-heading" >
                                <a class="collapsed btn bill-info text-uppercase" data-toggle="collapse" data-parent="#checkout-progress" href="#order-review"><span>4</span>ORDER REVIEW</a>
                            </div>
                            <div id="order-review" class="panel-collapse collapse detail-content">
                                <div class="panel-body">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="billing-information clearfix">
                                            <div class="table-responsive">
                                                <table class="tablec">
                                                    <tr>
                                                        <td>Product Name</td>
                                                        <td>Price</td>
                                                        <td>Qty</td>
                                                        <td>Subtotal</td>
                                                    </tr>

                                                    @foreach(Cart::instance('cart')->content() as $row)
                                                        <tr>
                                                            <td>{{ $row->name }}</td>
                                                            <td><p class="tabletextp">Rp {{ number_format($row->price,0,',','.') }}</p></td>
                                                            <td>{{ $row->qty }}</td>
                                                            <td><p class="tabletextp">Rp {{ number_format($row->price*$row->qty,0,',','.') }}</p></td>
                                                        </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td colspan="3">
                                                            <p class="tabletext">Subtotal</p>
                                                            <p class="tabletext">Shipping & Handling (Flat Rate - Fixed)</p>
                                                            <p class="tabletext">Grand Total</p>
                                                        </td>
                                                        <td>
                                                            <p class="tabletextp">Rp {{ \Cart::instance('cart')->subtotal() }}</p>
                                                            <p class="tabletextp">FREE</p>
                                                            <p class="tabletextp">Rp {{ \Cart::instance('cart')->total() }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">
                                                            <div class="button-check">
                                                                <div class="">
                                                                    <span class="left-btn">
                                                                        <a href="#">Forgot an Item? Edit Your Cart</a>
                                                                    </span>
                                                                    <button type="submit" class="btn right-btn custom-button">Continue</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="chk-prog">
                        <h3 class="chk-pro text-uppercase">YOUR CHECKOUT PROGRESS</h3>
                        <ul class="billing">
                            <li><a href="#"><i class="fa fa-angle-right"></i>Billing Address</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Shipping Address</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Shipping Method</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Payment Method</a></li>
                        </ul>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!--End Checkout information area -->
@endsection

@push('plugin_scripts')
@endpush

@push('scripts')
@endpush