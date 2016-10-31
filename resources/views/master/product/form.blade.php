@extends('layouts.master')

@push('plugin_css')
@endpush

@section('content')
    {!! Form::open(['route' => $update == 1 ? ['product.update', $model->id] :'product.store', 'method' => 'post']) !!}
    <main class="mn-inner">
        <div class="row">
            <div class="col s12">
                <div class="page-title">Product</div>
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
                                    {!! Form::label('name', 'Product Name', ['data-error' => 'wrong','data-success'=>'right']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    {!! Form::select('category_id', App\Models\Category::pluck('name','id'), $model->category_id) !!}
                                    {!! Form::label('category_id', 'Category') !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    {!! Form::number('price', $model->price,['class'=>'validate','required'=>'','aria-required'=>'true']) !!}
                                    {!! Form::label('price', 'Product Price', ['data-error' => 'wrong','data-success'=>'right']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    {!! Form::number('stock', $model->stock,['class'=>'validate','required'=>'','aria-required'=>'true']) !!}
                                    {!! Form::label('stock', 'Stock', ['data-error' => 'wrong','data-success'=>'right']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    {!! Form::number('discount', $model->discount == null ? 0: null,['class'=>'validate','required'=>'','aria-required'=>'true']) !!}
                                    {!! Form::label('discount', 'Discount (%)', ['data-error' => 'wrong','data-success'=>'right']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    {!! Form::textarea('description', $model->description,['length'=>'120','class'=>'materialize-textarea validate','required'=>'','aria-required'=>'true']) !!}
                                    {!! Form::label('description', 'Description', ['data-error' => 'wrong','data-success'=>'right']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    {!! Form::checkbox('available', $model->available,true,['class'=>'filled-in','id'=>'available']) !!}
                                    {!! Form::label('available', 'Available') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l6">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="input_fields_wrap">
                                <div class="row">
                                    <div class="col m5">
                                        <div class="form-group">
                                            <button type="button" class="btn btn-success add_field_button">Add More Fields</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s5">
                                        <i class="material-icons prefix">delete</i>
                                        {!! Form::select('category_id', App\Models\Category::pluck('name','id'), $model->category_id) !!}
                                        {!! Form::label('category_id', 'Key') !!}
                                    </div>
                                    <div class="input-field col s7">
                                        <input id="icon_telephone" type="tel" class="validate">
                                        <label for="icon_telephone">Value</label>
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
<script>
    $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID
        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                //$(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
                $(wrapper).append('<div class="row">' +
                        '<div class="input-field col s5">' +
                        '<i class="material-icons prefix remove_field">delete</i>' +
                        '<?php echo Form::select('category_id', App\Models\Category::pluck('name','id'), $model->category_id); ?>' +
                        '<?php echo Form::label('category_id', 'Key'); ?>' +
                        '</div> ' +
                        '<div class="input-field col s7">' +
                        '<input id="icon_telephone" type="tel" class="validate"> ' +
                        '<label for="icon_telephone">Value</label>' +
                        '</div>' +
                        '</div>' ); //add input box
                $('select').material_select();
            }
        });
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
        })
    });
</script>
@endpush