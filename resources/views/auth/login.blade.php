@extends('layouts.frontend')

@section('content')
    <!-- slider area start -->
    <div class="slider-area " xmlns="http://www.w3.org/1999/html">
        <div class="slider-content">
            <img src="{{ url('assets/img/slider-img/grid-baner.jpg') }}" alt="baner">
            <h1 class="cat-title text-center text-uppercase">Login</h1>
        </div>
    </div>
    <!-- slider area end-->

    <!-- contact-area start -->
    <div class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="contact-form">
                        <h3><i class="fa fa-envelope-o"></i> Login Form</h3>
                        @if ($errors->has('email'))
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <div class="alert alert-danger" role="alert">
                                        <strong> Warning Email! </strong> {{ $errors->first('email') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($errors->has('password'))
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <div class="alert alert-danger" role="alert">
                                        <strong> Warning Password! </strong> {{ $errors->first('password') }}
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="row">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" id="email" name="email" placeholder="Email (required)" value="{{ old('email') }}" required autofocus />
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" id="password" name="password" placeholder="Password (required)" required/>
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <input type="submit" id="submit" name="submit" value="Sign In" />
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <button name="register" type="button" onclick="javascript:window.location = '{{ url('/register') }}';"> Register </button>
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
