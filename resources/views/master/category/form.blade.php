@extends('layouts.master')

@push('plugin_css')
@endpush

@section('content')
    {!! Form::open(['route' => $update == 1 ? ['category.update', $model->id] :'category.store', 'method' => 'post', 'files' => true]) !!}
    <main class="mn-inner">
        <div class="row">
            <div class="col s12">
                <div class="page-title">Category</div>
            </div>
            @if (count($errors) > 0)
                <div class="col m12">
                    <div class="card-panel red lighten-1">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <div class="col s12 m12 l6">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="row">
                                <div class="input-field col s12">
                                    {!! Form::text('name', $model->name,['class'=>'validate','required'=>'','aria-required'=>'true']) !!}
                                    {!! Form::label('name', 'Category Name', ['data-error' => 'wrong','data-success'=>'right']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    {!! Form::textarea('description', $model->description,['length'=>'120','class'=>'materialize-textarea validate','required'=>'','aria-required'=>'true']) !!}
                                    {!! Form::label('description', 'Description', ['data-error' => 'wrong','data-success'=>'right']) !!}
                                </div>
                            </div>
                            @if($update == true)
                                <div class="row">
                                    <img src="{{ url('storage/app/'.$model->image) }}" style="width: 300px; height: 300px;">
                                </div>
                            @endif
                            <div class="row">
                                <div class="input-field col s12">
                                    <div class="file-field input-field">
                                        <div class="btn teal lighten-1">
                                            <span>File</span>
                                            <input type="file">
                                            {!! Form::file('image') !!}
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s12 m12 l12">
                {!! Form::submit('Submit',['class'=>'waves-effect waves-light btn']) !!}
            </div>

        </div>
    </main>
    {!! Form::close() !!}
@endsection

@push('plugin_scripts')
@endpush

@push('scripts')
@endpush