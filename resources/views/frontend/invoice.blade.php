@extends('layouts.frontend')

@section('content')
    <style>
        .invoice-box{
            max-width:800px;
            margin:auto;
            padding:30px;
            border:1px solid #eee;
            box-shadow:0 0 10px rgba(0, 0, 0, .15);
            font-size:16px;
            line-height:24px;
            font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color:#555;
        }

        .invoice-box table{
            width:100%;
            line-height:inherit;
            text-align:left;
        }

        .invoice-box table td{
            padding:5px;
            vertical-align:top;
        }

        .invoice-box table tr td:nth-child(2){
            text-align:right;
        }

        .invoice-box table tr.top table td{
            padding-bottom:20px;
        }

        .invoice-box table tr.top table td.title{
            font-size:45px;
            line-height:45px;
            color:#333;
        }

        .invoice-box table tr.information table td{
            padding-bottom:40px;
        }

        .invoice-box table tr.heading td{
            background:#eee;
            border-bottom:1px solid #ddd;
            font-weight:bold;
        }

        .invoice-box table tr.details td{
            padding-bottom:20px;
        }

        .invoice-box table tr.item td{
            border-bottom:1px solid #eee;
        }

        .invoice-box table tr.item.last td{
            border-bottom:none;
        }

        .invoice-box table tr.total td:nth-child(2){
            border-top:2px solid #eee;
            font-weight:bold;
            font-size: 20px;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td{
                width:100%;
                display:block;
                text-align:center;
            }

            .invoice-box table tr.information table td{
                width:100%;
                display:block;
                text-align:center;
            }
        }
    </style>

    <!-- slider area start -->
    <div class="slider-area ">
        <div class="slider-content">
            <img src="{{ url('assets/img/slider-img/grid-baner.jpg') }}" alt="baner">
            <h1 class="cat-title text-center text-uppercase">Invoice</h1>
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
                            <span class="s-cart">Invoice</span>
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
                <div class="col-md-12">
                    <div class="invoice-box">
                        <table cellpadding="0" cellspacing="0">
                            <tr class="top">
                                <td colspan="2">
                                    <table>
                                        <tr>
                                            <td class="title">
                                                <img src="{{ url('assets/img/logo/15644939_1283846248349720_417921586_n.jpg') }}" style="width:100px; max-width:300px;">
                                            </td>

                                            <td>
                                                Invoice #: {{ $transaction->id }}<br>
                                                Created: <?= date("F d, Y",strtotime($transaction->created_at)) ?><br>
                                                Due: <?= date("F d, Y",strtotime("+3 days",strtotime($transaction->created_at))) ?>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <tr class="information">
                                <td colspan="2">
                                    <table>
                                        <tr>
                                            <td>
                                                Olive, Inc.<br>
                                                Jalan Raya Denpasar<br>
                                                0857373434348
                                            </td>

                                            <td>
                                                <?= $transaction->fullname ?><br>
                                                <?= $transaction->phone ?>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <tr class="heading">
                                <td>
                                    Payment Method
                                </td>

                                <td>
                                </td>
                            </tr>

                            <tr class="details">
                                <td>
                                    Transfer Bank
                                </td>

                                <td>

                                </td>
                            </tr>

                            <tr class="heading">
                                <td>
                                    Item
                                </td>

                                <td>
                                    Price
                                </td>
                            </tr>

                            <?php foreach ($detail as $row): ?>
                            <tr class="item">
                                <td>
                                    <?= $row->product->name ?> x <?= $row->qty ?>
                                </td>
                                <td>
                                    Rp <?= number_format($row->total,0,',','.') ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>

                            <tr class="total">
                                <td></td>

                                <td>
                                    Total: Rp <?= number_format($transaction->total,0,',','.') ?>
                                </td>
                            </tr>
                        </table>

                    </div>
                    <br><br>
                    <center><a class="btn btn-primary" href="{{ route('cart.payment') }}">Continue to payment  <i class="fa fa-chevron-right" aria-hidden="true"></i> </a> </center>
                    <br><br><br>
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