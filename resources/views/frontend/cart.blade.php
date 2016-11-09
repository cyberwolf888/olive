@extends('layouts.frontend')

@section('content')
    <!-- slider area start -->
    <div class="slider-area ">
        <div class="slider-content">
            <img src="{{ url('assets/img/slider-img/grid-baner.jpg') }}" alt="baner">
            <h1 class="cat-title text-center text-uppercase">Cart</h1>
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
                            <a href="#">
                                <span class="home"> Cart </span>
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <span class="s-cart">Shopping cart</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Breadcumb area -->

    <div class="cart-area-detail cart">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="table-responsive text-center">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="bgcolor">
                                <th class="text-center">Products</th>
                                <th class="text-center">Products name</th>
                                <th class="text-center">Unit Price</th>
                                <th class="text-center">Qty</th>
                                <th class="text-center">Subtotal</th>
                                <th></th>
                            </tr>
                            </thead>

                            @foreach(Cart::instance('cart')->content() as $row)
                                <tbody>
                                <tr class="table-info">
                                    <td class="prod">
                                        <a href="{{ route('front_product',$row->id) }}">
                                            <img src="{{ url('storage/app/'.$row->model->getImage($row->id)->image) }}" alt="" width="88" height="133">
                                        </a>
                                    </td>
                                    <td class="ptitle">
                                        <a href="{{ route('front_product',$row->id) }}">{{ $row->name }}</a>
                                    </td>
                                    <td class="unit">
                                        <span>Rp {{ number_format($row->price,0,',','.') }}</span>
                                    </td>
                                    <td class="qty">
                                        <input id="{{ $row->rowId }}" type="text" value="{{ $row->qty }}" onchange="update_cart('{{ $row->rowId }}')">
                                    </td>
                                    <td class="unit">
                                        <span>Rp {{ number_format($row->price*$row->qty,0,',','.') }}</span>
                                    </td>
                                    <td>
                                        <a href="javascript:null" onclick="delete_cart('{{ $row->rowId }}')"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shopping-area cart-page">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="shopping text-uppercase">
                        <a href="{{ route('home') }}">CONTINUE SHOPPING</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="shopping text-uppercase"><a href="javascript:null" onclick="clear_cart()">clear SHOPPING CART</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cart-content-area">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-8 col-md-4">
                    <div class="grand-total-area">
                        <p class="sub-total">Subtotal: Rp {{ \Cart::instance('cart')->subtotal() }}</p>
                        <p class="sub-total">Tax: FREE</p>
                        <h2 class="grand-total">Grand total: <span class="amt">Rp {{ \Cart::instance('cart')->total() }}</span></h2>
                        <a class="pro-checkout text-uppercase" href="#">PROCEED TO CHECK OUT</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('plugin_scripts')
@endpush

@push('scripts')
<script>
    function update_cart(rowid)
    {
        var qty = $("#"+rowid).val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '<?= route('cart.update') ?>',
            type: 'POST',
            data: {rowId:rowid,qty:qty},
            success: function (data) {
                //console.log(data);
                //location.reload();
            }
        });
    }

    function delete_cart(rowid)
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '<?= route('cart.delete') ?>',
            type: 'POST',
            data: {rowId:rowid},
            success: function (data) {
                //console.log(data);
                location.reload();
            }
        });
    }

    function clear_cart()
    {
        var prompt = confirm("Are you sure to clear this cart?");

        if (prompt == true) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '<?= route('cart.clear') ?>',
                type: 'POST',
                data: {},
                success: function (data) {
                    //console.log(data);
                    location.reload();
                }
            });
        }

    }
</script>
@endpush