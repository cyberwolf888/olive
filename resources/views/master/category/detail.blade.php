@extends('layouts.master')

@push('plugin_css')
@endpush

@section('content')
    <main class="mn-inner">
        <div class="row">
            <div class="col s12">
                <div class="page-title">Detail Category</div>
            </div>

            <div class="col s12 m12 l6">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <ul class="collection">
                                <li class="collection-item">
                                    <span class="grey-text text-lighten-1">Category Name</span><br>
                                    <b>{{ $model->name }}</b>
                                </li>
                                <li class="collection-item">
                                    <span class="grey-text text-lighten-1">Description</span><br>
                                    <b>{{ $model->description }}</b>
                                </li>
                                <li class="collection-item">
                                    <span class="grey-text text-lighten-1">Image</span><br>
                                    <img src="{{ url('storage/app/'.$model->image) }}" style="width: 300px; height: 300px">
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