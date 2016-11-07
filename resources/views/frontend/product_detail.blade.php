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
                                    @foreach($images as $img)
                                    <a href="{{ url('storage/app/'.$img->image) }}" data-lightbox="{{ url('storage/app/'.$img->image) }}" data-title="High Neck Bodycon Dress">
                                        <img src="{{ url('storage/app/'.$img->image) }}" alt="">
                                    </a>
                                    @endforeach

                                </div>
                                <div class="single-thumbnail-small row">
                                    <?php $no = 1; ?>
                                    @foreach($images as $img)
                                        <div class="{{ $no }} single-thumb" data-slick-index="{{ $no }}">
                                            <img src="{{ url('storage/app/'.$img->image) }}" alt="thumb{{ $no }}">
                                        </div>
                                    @endforeach
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
                                Availability: {{ $model->available == 1 ? 'In stock'  : 'Out of stock'}}
                                @if($model->available)
                                    <br>
                                    Stock: {{ $model->stock }}
                                @endif
                                <br>
                            </p>
                            <p class="d-content">
                                {{ $model->description }}</p>
                        </div>
                        <div class="cart-quantity">
                            <div class="cart-plus-minus">
                                <input id="qty" class="cart-plus-minus-box" type="text" name="qtybutton" value="1" readonly>
                            </div>
                        </div>
                        <div class="detail-choices">
                            <div class="choice-icon">
                                <ul>
                                    <li>
                                        <a id="btn_add" class="text-uppercase adtocart" href="javascript:null;">add to cart</a>
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
                                <span>Category :</span>
                                asd
                            </p>
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
                            <!--
                            <li role="presentation" class="active p-description">
                                <a href="#product-description" aria-controls="product-description" role="tab" data-toggle="tab">product description</a>
                            </li>
                            -->
                            <li role="presentation" class="active d-reviews">
                                <a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Product Detail</a>
                            </li>
                        </ul>
                    </div>
                    <div class="reviews-content">
                        <div class="tab-content">
                            <!--
                            <div role="tabpanel" class="tab-pane fade in active" id="product-description">
                                <p class="r-content">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.
                                </p>
                            </div>
                            -->
                            <div role="tabpanel" class="tab-pane fade in active" id="reviews">
                                <p class="r-content">
                                <div class="col-md-6">
                                    <table class="table table-striped">
                                        @foreach($model->product_detail as $detail)
                                        <tr>
                                            <td>{{ $detail->label }}</td>
                                            <td>{{ $detail->value }}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>

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

@push('scripts')
<script>
    /*----------------------------
     Slick carousel active
     ------------------------------ */
    $('.single-thumbnail-big').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.single-thumbnail-small'
    });
    $('.single-thumbnail-small').slick({
        slidesToShow: <?= count($images) ?>,
        slidesToScroll: 1,
        asNavFor: '.single-thumbnail-big',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        arrows: true,
        prevArrow: '<button type="button" class="custom-prev"><i class="fa fa-long-arrow-left"></i></button>',
        nextArrow: '<button type="button" class="custom-next"><i class="fa fa-long-arrow-right"></i></button>'
    });
</script>

<script>
    $(document).ready(function () {
        $("#btn_add").click(function () {
            var qty = $("#qty").val();
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '<?= route('cart.insert') ?>',
                type: 'POST',
                data: {qty:qty, product_id:'<?= $model->id ?>'},
                success: function (data) {
                    //console.log(data);
                    location.reload();
                }
            });
        });
    })
</script>
@endpush