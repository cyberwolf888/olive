@extends('layouts.master')

@push('plugin_css')
@endpush

@section('content')
    {!! Form::open(['route' => $update == 1 ? ['admin.update', $model->id] :'admin.store', 'method' => 'post']) !!}
    <main class="mn-inner">
        <div class="row">
            <div class="col s12">
                <div class="page-title">Admin</div>
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
                        <span class="card-title">Data User</span><br>
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="fullname" id="fullname" type="text" class="validate" value="{{ $model->name }}" required="" aria-required="true">
                                <label for="fullname" data-error="wrong" data-success="right">Full Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="email" id="email" type="email" class="validate" value="{{ $model->email }}" required="" aria-required="true">
                                <label for="email" data-error="wrong" data-success="right">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="password" id="password" type="password" class="validate" required="" aria-required="true">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="password_confirmation" id="password_confirmation" type="password" class="validate" required="" aria-required="true">
                                <label for="password_confirmation">Password Confirmation</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="switch m-b-md">
                                <label>
                                    Deactive
                                    <input type="checkbox" name="status" {{ $model->status != '' ? 'checked' : '' }}>
                                    <span class="lever"></span>
                                    Active
                                </label>
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