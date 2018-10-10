@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.candidates.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.candidates.store'],'files'=>true]) !!}
     <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        {{-- 1st row --}}
        <div class="panel-body">

        <div class="col-xs-12">
        <div class="col-xs-5">
            <div class="row">
                <div class=" form-group">
                    {!! Form::label('first_name', trans('quickadmin.candidates.fields.fname').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('first_name', old('first_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('first_name'))
                        <p class="help-block">
                            {{ $errors->first('first_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class=" form-group">
                    {!! Form::label('middle_name', trans('quickadmin.candidates.fields.mname'), ['class' => 'control-label']) !!}
                    {!! Form::text('middle_name', old('middle_name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('middle_name'))
                        <p class="help-block">
                            {{ $errors->first('middle_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class=" form-group">
                    {!! Form::label('last_name', trans('quickadmin.candidates.fields.lname').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('last_name', old('last_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('last_name'))
                        <p class="help-block">
                            {{ $errors->first('last_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class=" form-group">
                    {!! Form::label('email_address', trans('quickadmin.candidates.fields.email_address').'*', ['class' => 'control-label']) !!}
                    {!! Form::email('email_address', old('email_address'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email_address'))
                        <p class="help-block">
                            {{ $errors->first('email_address') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class=" form-group">
                    {!! Form::label('home_address', trans('quickadmin.candidates.fields.home_address').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('home_address', old('home_address'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('home_address'))
                        <p class="help-block">
                            {{ $errors->first('home_address') }}
                        </p>
                    @endif
                </div>
            </div>
            
            </div>

            <div class="col-xs-offset-1 col-xs-5">
            <div class="row">
                <div class=" form-group">
                    {!! Form::label('contact_number', trans('quickadmin.candidates.fields.contact_number').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('contact_number', old('contact_number'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('contact_number'))
                        <p class="help-block">
                            {{ $errors->first('contact_number') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class=" form-group">
                    {!! Form::label('cv', trans('quickadmin.candidates.fields.cv').'*', ['class' => 'control-label']) !!} <br>
                    <button id="browse-click" type="submit" class="btn btn-primary">
                    <i class="glyphicon glyphicon-paperclip"></i>
                    </button>
                    <input type="file" name="has_images[]" class="invisible" id="cv" multiple><br>
                </div>
            </div>
            </div>
        </div>
        </div>
        {{-- End of 1st row --}}
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop
@section('javascript')
    @parent

<script type="text/javascript">
$(window).load(function () {
    var intervalFunc = function () {
        $('#file-name').html($('#cv').val());
    };
    $('#browse-click').on('click', function () { // use .live() for older versions of jQuery
        $('#cv').click();
        setInterval(intervalFunc, 1);
        return false;
    });
});
</script>
@stop