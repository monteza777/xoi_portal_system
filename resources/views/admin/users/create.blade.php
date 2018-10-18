@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.users.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.users.store'],'files'=>true]) !!}

<div class="panel panel-default">
    <div class="panel-heading">
        @lang('quickadmin.qa_create')
    </div>
    
<div class="panel-body">
    <div class="col-xs-12">
        <div class="col-xs-4">
            <div class="row">
                <div class=" form-group">
                    {!! Form::label('first_name', trans('quickadmin.users.fields.fname').'*', ['class' => 'control-label']) !!}
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
                        {!! Form::label('last_name', trans('quickadmin.users.fields.lname').'*', ['class' => 'control-label']) !!}
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
                        {!! Form::label('password', trans('quickadmin.users.fields.password').'*', ['class' => 'control-label']) !!}
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('password'))
                            <p class="help-block">
                                {{ $errors->first('password') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class=" form-group">
                        {!! Form::label('role_id', trans('quickadmin.users.fields.role').'', ['class' => 'control-label']) !!}
                        {!! Form::select('role_id', $roles, old('role_id'), ['class' => 'form-control select2']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('role_id'))
                            <p class="help-block">
                                {{ $errors->first('role_id') }}
                            </p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-xs-offset-1 col-xs-4">
                <div class="row">
                    <div class=" form-group">
                        {!! Form::label('email', trans('quickadmin.users.fields.email').'*', ['class' => 'control-label']) !!}
                        {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Email Address', 'required' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('email'))
                            <p class="help-block">
                                {{ $errors->first('email') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class=" form-group">
                        {!! Form::label('contact_number', trans('quickadmin.users.fields.contact_number'), ['class' => 'control-label']) !!}
                        {!! Form::text('contact_number', old('contact_number'), ['class' => 'form-control', 'placeholder' => 'Contact Number', ]) !!}
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
                        {!! Form::label('position', trans('quickadmin.users.fields.position'), ['class' => 'control-label']) !!}
                        {!! Form::text('position', old('position'), ['class' => 'form-control', 'placeholder' => 'Position', ]) !!}
                        <p class="help-block"></p>
                        @if($errors->has('position'))
                            <p class="help-block">
                                {{ $errors->first('position') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class=" form-group">
                        <div class="input-group input-group-unstyled">
                        <label for="accountSpan">Date To</label>
                            <div class="input-group input-group-unstyled">
                            {!! Form::text('join_date', old('join_date'), ['class' => 'form-control', 'placeholder' => 'Date To','id'=>'datepicker','style'=>'width: 415px;']) !!}
                            <span class="input-group-addon">
                            <i class="glyphicon glyphicon-calendar">
                            </i>
                            </span>
                           </div>
                            <p class="help-block"></p>
                            @if($errors->has('join_date'))
                                <p class="help-block">
                                    {{ $errors->first('join_date') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="panel-heading">
                    <button id="browse-click" type="submit" class="btn btn-primary btn-sm" >
                    Upload Image
                    </button>
                    <input type="file" name="has_images" class="" id="image">
                </div>
            </div>
        </div>
    </div>
</div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    <a href="{{ route('admin.users.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
    {!! Form::close() !!}
@stop
@section('javascript')
    @parent
<script type="text/javascript">
$(document).ready(function(){
 $('.datepicker').datepicker(); 
});

$(window).load(function () {
    var intervalFunc = function () {
        $('#file-name').html($('#image').val());
    };
    $('#browse-click').on('click', function () { // use .live() for older versions of jQuery
        $('#image').click();
        setInterval(intervalFunc, 1);
        return false;
    });
});
</script>
@stop
