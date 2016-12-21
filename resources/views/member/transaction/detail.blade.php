@extends('layouts.member')

@push('plugin_css')
@endpush

@section('content')
    <main class="mn-inner">
        <div class="row">
            <div class="col s12">
                <div class="page-title">Detail Transaction</div>
            </div>
            @if($model->status == \App\Models\Transaction::VERIFIED)
                <div class="col s12">
                    <a class="waves-effect waves-light btn green modal-trigger" href="#modal_approve"><i class="material-icons left">done</i>Barang telah diterima</a>
                </div>
            @endif
            <div class="col s12 m12 l6">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <ul class="collection">
                                <li class="collection-item">
                                    <span class="grey-text text-lighten-1">Order No</span><br>
                                    <b>{{ $model->id }}</b>
                                </li>
                                <li class="collection-item">
                                    <span class="grey-text text-lighten-1">Name</span><br>
                                    <b>{{ $model->fullname }}</b>
                                </li>
                                <li class="collection-item">
                                    <span class="grey-text text-lighten-1">Phone</span><br>
                                    <b>{{ $model->phone }}</b>
                                </li>
                                <li class="collection-item">
                                    <span class="grey-text text-lighten-1">Address</span><br>
                                    <b>{{ $model->address.', '.$model->state.' - '.$model->zip_code }}</b>
                                </li>
                                <li class="collection-item">
                                    <span class="grey-text text-lighten-1">status</span><br>
                                    <b>{{ $model->getStatus($model->status) }}</b>
                                </li>
                                <li class="collection-item">
                                    <span class="grey-text text-lighten-1">No AWB</span><br>
                                    <b>{{ $model->resi }}</b>
                                </li>
                                <li class="collection-item">
                                    <span class="grey-text text-lighten-1">Total</span><br>
                                    <b>Rp {{ number_format($model->total,0,',','.') }}</b>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l6">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <ul class="collection">
                                @foreach($model->transaction_detail as $detail)
                                    <li class="collection-item">
                                        <span class="grey-text text-lighten-1">{{ \App\Models\Product::find($detail->product_id)->name }}</span><br>
                                        Price: Rp {{ number_format($detail->price,0,',','.') }}<br>
                                        Qty: {{ $detail->qty }}<br>
                                        Total: Rp {{ number_format($detail->total,0,',','.') }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if($model->payment != null)
        <div class="row">
            <div class="col s12">
                <div class="page-title">Detail Payment</div>
            </div>
            <div class="col s12 m12 12">
                <div class="card">
                    <div class="card-content">
                        <img src="{{ url('storage/app/images/payment/'.$model->payment->image) }}" style="width: 600px; height: 600px;">
                    </div>
                </div>

            </div>
        </div>
        @endif
    </main>
    <!-- Modal Structure -->
    <div id="modal_approve" class="modal">
        {!! Form::open(['route' => 'member.transaction.approve', 'method' => 'post']) !!}
        <div class="modal-content">
            <h4>Approve</h4>
            <p>Apakah anda yakin sudah menerima barang pesanan anda?</p>
            {!! Form::hidden('transaction_id',$model->id) !!}
        </div>
        <div class="modal-footer">
            {!! Form::submit('Agree',['class'=>'waves-effect waves-green btn-flat']) !!}
            <a href="javascript:null;" class=" modal-action modal-close waves-effect waves-red btn-flat">Disagree</a>
        </div>
        {!! Form::close() !!}
    </div>
@endsection

@push('plugin_scripts')
@endpush

@push('scripts')
<script>
</script>
@endpush