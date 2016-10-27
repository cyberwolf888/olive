@extends('layouts.master')

@push('plugin_css')
@endpush

@section('content')
    <main class="mn-inner">
        <div class="row">
            <div class="col s12">
                <div class="page-title">Detail Member</div>
            </div>

            <div class="col s12 m12 l6">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Data Member</span><br>
                        <div class="row">
                            <ul class="collection">
                                <li class="collection-item">
                                    <span class="grey-text text-lighten-1">Full Name</span><br>
                                    <b>{{ $model->fullname }}</b>
                                </li>
                                <li class="collection-item">
                                    <span class="grey-text text-lighten-1">PHone Number</span><br>
                                    <b>{{ $model->phone }}</b>
                                </li>
                                <li class="collection-item">
                                    <span class="grey-text text-lighten-1">State</span><br>
                                    <b>{{ $model->state }}</b>
                                </li>
                                <li class="collection-item">
                                    <span class="grey-text text-lighten-1">Address</span><br>
                                    <b>{{ $model->address }}</b>
                                </li>
                                <li class="collection-item">
                                    <span class="grey-text text-lighten-1">Postal Code</span><br>
                                    <b>{{ $model->zip_code }}</b>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l6">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Data User</span><br>
                        <div class="row">
                            <ul class="collection">
                                <li class="collection-item">
                                    <span class="grey-text text-lighten-1">Email</span><br>
                                    <b>{{ $model->user->email }}</b>
                                </li>
                                <li class="collection-item">
                                    <span class="grey-text text-lighten-1">Status User</span><br>
                                    <b>{{ \App\User::getStatus($model->user->status) }}</b>
                                </li>
                                <li class="collection-item">
                                    <span class="grey-text text-lighten-1">Join Date</span><br>
                                    <b>{{ date("d F Y",strtotime($model->user->created_at)) }}</b>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('plugin_scripts')
@endpush

@push('scripts')
@endpush