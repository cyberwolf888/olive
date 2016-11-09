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
                                <span class="home"> Men </span>
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
                <div class="col-md-9">
                    <div class="panel-group information-area" id="checkout-progress">
                        <div class="panel panel-default information">
                            <div class="panel-heading" >
                                <a class="active btn bill-info text-uppercase" data-toggle="collapse" data-parent="#checkout-progress" href="#check-meth"><span>1</span>CHECKOUT METHOD</a>
                            </div>
                            <div id="check-meth" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="row chkm">
                                        <div class="col-md-6 checkout">
                                            <div class="chk-guest">
                                                <h4 class="chkout">CHECKOUT AS A GUEST OR REGISTER</h4>
                                                <p class="register">Register with us for future convenience:</p>
                                                <form action="#">
                                                    <input type="radio" name="gender" value="chk"> Checkout as Guest
                                                    <br>
                                                    <input type="radio" name="gender" value="register"> Register
                                                </form>
                                            </div>
                                            <div class="register-time">
                                                <h4 class="reg">REGISTER AND SAVE TIME!</h4>
                                                <p class="register">Register with us for future convenience:</p>
                                                <form action="#">
                                                    <input type="radio" name="gender" value="checkout"> Fast and easy check out
                                                    <br>
                                                    <input type="radio" name="gender" value="status"> Easy access to your order history and status
                                                </form>
                                            </div>
                                            <a href="#" class="continue">CONTINUE</a>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="login-area col-md-offset-2">
                                                <div class="login-form">
                                                    <h3 class="login text-uppercase">LOGIN</h3>
                                                    <h4 class="a-reg">ALREADY REGISTERED?</h4>
                                                    <p class="p-log">Please log in below :</p>
                                                    <form action="#">
                                                        <label class="e-add">* Email Address</label>
                                                        <br>
                                                        <input type="text">
                                                        <br>
                                                        <label class="pass">* Password</label>
                                                        <br>
                                                        <input type="text" id="pass">
                                                    </form>
                                                    <p class="req">* Required Fields
                                                        <br><a href="#"><span class="forget">Forgot your password ?</span></a>
                                                    </p>
                                                </div>
                                                <a href="#" class="login">LOGIN</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default information">
                            <div class="panel-heading" >
                                <a class="collapsed btn bill-info text-uppercase" data-toggle="collapse" data-parent="#checkout-progress" href="#bill-info"><span>2</span>BILLING INFORMATION</a>
                            </div>
                            <div id="bill-info" class="panel-collapse collapse detail-content">
                                <div class="panel-body">
                                    <div class="bill-information">
                                        <form action="#">
                                            <div class="form">
                                                <div class="card-control">
                                                    <ul>
                                                        <li>
                                                            <div class="field fix">
                                                                <div class="input-box">
                                                                    <label class="label" for="first">First Name <em>*</em></label>
                                                                    <input type="text" class=" border-color" id="first">
                                                                </div>
                                                                <div class="input-box">
                                                                    <label class="label" for="middle">Middle Name/Initial </label>
                                                                    <input type="text" class=" border-color" id="middle">
                                                                </div>
                                                                <div class="input-box">
                                                                    <label class="label" for="last">Last Name<em>*</em></label>
                                                                    <input type="text" class=" border-color" id="last">
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="field fix">
                                                                <div class="input-box">
                                                                    <label class="label">Company </label>
                                                                    <input type="text" class=" border-color" id="Company">
                                                                </div>
                                                                <div class="input-box">
                                                                    <label class="label">Email Address <em>*</em></label>
                                                                    <input type="email" class=" border-color"/>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="field fix">
                                                                <div class="input-box inhun">
                                                                    <label class="label" for="addr">Address <em>*</em></label>
                                                                    <input type="text" class=" border-color" id="addr"/>
                                                                    <input type="text" class=" border-color"/>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="field fix">
                                                                <div class="input-box">
                                                                    <label class="label">City <em>*</em></label>
                                                                    <input type="text" class=" border-color" id="City">
                                                                </div>
                                                                <div class="input-box">
                                                                    <label class="label">State/Province<em>*</em></label>
                                                                    <div class="i-box">
                                                                        <select  id="State">
                                                                            <option value="" selected>Select</option>
                                                                            <option value="">Japan</option>
                                                                            <option value="">Germani</option>
                                                                            <option value="">India</option>
                                                                            <option value="">US</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="field fix">
                                                                <div class="input-box">
                                                                    <label class="label">Zip/Postal Code <em>*</em></label>
                                                                    <input type="text" class=" border-color" id="Zip">
                                                                </div>
                                                                <div class="input-box">
                                                                    <label class="label">Country<em>*</em></label>
                                                                    <div class="i-box">
                                                                        <select  id="Country">
                                                                            <option value="" selected>Select</option>
                                                                            <option value="">Japan</option>
                                                                            <option value="">Germani</option>
                                                                            <option value="">India</option>
                                                                            <option value="">US</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="field fix">
                                                                <div class="input-box">
                                                                    <label class="label">Telephone <em>*</em></label>
                                                                    <input type="text" class=" border-color" id="Telephone">
                                                                </div>
                                                                <div class="input-box">
                                                                    <label class="label" for="Fax">Fax <em>*</em></label>
                                                                    <input type="text" class=" border-color" id="Fax">
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="chackoutl">
                                                                <div class="i-boxb topmargin">
                                                                    <input class="checkout-radio" type="radio" name="tag" id="guest"/>
                                                                    <label class="cradio" for="guest">Checkout as Guest</label>
                                                                </div>
                                                                <div class="i_boxb">
                                                                    <input class="checkout-radio" type="radio" name="tag" id="regis"/>
                                                                    <label class="cradio" for="regis">Register</label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="button-check clearfix">
                                                    <div class="">
                                                        <span class="left-btn">
                                                            <a href="#"><i class="fa fa-long-arrow-up"></i>Back</a>
                                                        </span>
                                                        <button type="submit" class="btn right-btn custom-button">Continue</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default information">
                            <div class="panel-heading" >
                                <a class="collapsed btn bill-info text-uppercase" data-toggle="collapse" data-parent="#checkout-progress" href="#ship-info"><span>3</span>SHIPPING INFORMATION</a>
                            </div>
                            <div id="ship-info" class="panel-collapse collapse detail-content">
                                <div class="panel-body">
                                    <div class="bill-information clearfix">
                                        <div class="flatrate">
                                            <p>Flat Rate</p>
                                            <p>Fixed &dollar;150.00</p>
                                        </div>
                                        <div class="button-check">
                                            <div class="">
                                                    <span class="left-btn">
                                                        <a href="#"><i class="fa fa-long-arrow-up"></i>Back</a>
                                                    </span>
                                                <button type="submit" class="btn right-btn custom-button">Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default information">
                            <div class="panel-heading" >
                                <a class="collapsed btn bill-info text-uppercase" data-toggle="collapse" data-parent="#checkout-progress" href="#ship-method"><span>4</span>SHIPPING METHOD</a>
                            </div>
                            <div id="ship-method" class="panel-collapse collapse detail-content">
                                <div class="panel-body">
                                    <div class="billing-information clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="flatrate">
                                                <p><input type="radio" id="Money"/><label for="Money">Check / Money order </label></p>
                                                <p><input type="radio" id="Credit"/><label for="Credit">Credit Card (saved) </label></p>
                                            </div>
                                            <div class="button-check">
                                                <div class="">
                                                    <span class="left-btn">
                                                        <a href="#"><i class="fa fa-long-arrow-up"></i>Back</a>
                                                    </span>
                                                    <button type="submit" class="btn right-btn custom-button">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default information">
                            <div class="panel-heading" >
                                <a class="collapsed btn bill-info text-uppercase" data-toggle="collapse" data-parent="#checkout-progress" href="#pay-info"><span>5</span>PAYMENT INFORMATION</a>
                            </div>
                            <div id="pay-info" class="panel-collapse collapse detail-content">
                                <div class="panel-body">
                                    <div class="billing-information clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="flatrate">
                                                <p>
                                                    <input type="radio" id="money"/>
                                                    <label for="Money">Check / Money order </label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="credit"/>
                                                    <label for="Credit">Credit Card (saved) </label>
                                                </p>
                                            </div>
                                            <div class="button-check">
                                                <div class="">
                                                    <span class="left-btn">
                                                        <a href="#"><i class="fa fa-long-arrow-up"></i>Back</a>
                                                    </span>
                                                    <button type="submit" class="btn right-btn custom-button">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default information">
                            <div class="panel-heading" >
                                <a class="collapsed btn bill-info text-uppercase" data-toggle="collapse" data-parent="#checkout-progress" href="#order-review"><span>6</span>ORDER REVIEW</a>
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
                                                    <tr>
                                                        <td>Cras neque metus</td>
                                                        <td><p class="tabletextp">&dollar;155</p></td>
                                                        <td>1</td>
                                                        <td><p class="tabletextp">&dollar;155.00</p></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">
                                                            <p class="tabletext">Subtotal</p>
                                                            <p class="tabletext">Shipping & Handling (Flat Rate - Fixed)</p>
                                                            <p class="tabletext">Grand Total</p>
                                                        </td>
                                                        <td>
                                                            <p class="tabletextp">&dollar;155.00</p>
                                                            <p class="tabletextp">&dollar;5.00</p>
                                                            <p class="tabletextp">&dollar;160.00</p>
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
            </div>
        </div>
    </div>
    <!--End Checkout information area -->


@endsection

@push('plugin_scripts')
@endpush

@push('scripts')
@endpush