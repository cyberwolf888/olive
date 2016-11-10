@extends('layouts.frontend')

@section('content')
    <!-- slider area start -->
    <div class="slider-area ">
        <div class="slider-content">
            <img src="{{ url('assets/img/slider-img/grid-baner.jpg') }}" alt="baner">
            <h1 class="cat-title text-center text-uppercase">Contact</h1>
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
                            <span class="s-cart">Contact</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Breadcumb area -->
    @if (session('success'))
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">Message has been sent!</div>
            </div>
        </div>
    </div>
    @endif
    <!-- contact-area start -->
    <div class="contact-area">
        <div class="container">
            <div class="row">
                <!-- contact-info start -->
                <div class="col-md-6 col-sm-12 col-xs-12 contact-info">
                    <div class="contact-info">
                        <h3>Contact info</h3>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i> <strong>Address</strong> {{ env('OWNER_ADDRESS') }}
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> <strong>Phone</strong> {{ env('OWNER_PHONE') }}
                            </li>
                            <li>
                                <i class="fa fa-mobile"></i> <strong>Email</strong>
                                <a href="#">{{ env('OWNER_MAIL') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- contact-info end -->
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="contact-form">
                        <h3><i class="fa fa-envelope-o"></i> Leave a Message</h3>
                        <div class="row">
                            <form action="{{ url('/contact') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" name="name" placeholder="Name (required)" required/>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" id="email" name="email" placeholder="Email (required)" required />
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" id="subject" name="subject" placeholder="Subject" required />
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
                                    <input type="submit" id="submit" name="submit" value="Submit Form" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-area end -->
@endsection

@push('plugin_scripts')
@endpush

@push('scripts')
@endpush