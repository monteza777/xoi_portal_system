@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.candidates.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.candidates.store'],'files'=>true]) !!}
     <div class="panel panel-default">
        <div class="panel-heading">
            <button id="browse-click" type="submit" class="btn btn-primary btn-sm" >
            Upload Resume
            </button>
            <input type="file" name="has_images[]" class="invisible" id="cv" multiple>
        </div>
        
        {{-- 1st row --}}
        <div class="panel-body">

        <div class="col-xs-12">
        <div class="col-xs-3">
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
                    {!! Form::text('home_address', old('home_address'), ['class' => 'form-control', 'placeholder' => 'Home Address', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('home_address'))
                        <p class="help-block">
                            {{ $errors->first('home_address') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>

        <div class="col-xs-offset-1 col-xs-3">
            <div class="row">
                <div class=" form-group">
                    {!! Form::label('age', trans('quickadmin.candidates.fields.age').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('age', old('age'), ['class' => 'form-control', 'placeholder' => 'Age', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('age'))
                        <p class="help-block">
                            {{ $errors->first('age') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class=" form-group">
                    {!! Form::label('contact_number', trans('quickadmin.candidates.fields.contact_number').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('contact_number', old('contact_number'), ['class' => 'form-control', 'placeholder' => 'Contact Number', 'required' => '']) !!}
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
                    {!! Form::label('postal_code', trans('quickadmin.candidates.fields.postal_code').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('postal_code', old('postal_code'), ['class' => 'form-control', 'placeholder' => 'Postal Code', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('postal_code'))
                        <p class="help-block">
                            {{ $errors->first('postal_code') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class=" form-group">
                    {!! Form::label('qualification', trans('quickadmin.candidates.fields.qualification').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('qualification', old('qualification'), ['class' => 'form-control', 'placeholder' => 'Qualification', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('qualification'))
                        <p class="help-block">
                            {{ $errors->first('qualification') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class=" form-group">
                    {!! Form::label('education_summary', trans('quickadmin.candidates.fields.education_summary').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('education_summary', old('education_summary'), ['class' => 'form-control', 'placeholder' => 'Education Summary', 'rows' => 3, 'cols' => 40]) !!}
                    <p class="help-block"></p>
                    @if($errors->has('education_summary'))
                        <p class="help-block">
                            {{ $errors->first('education_summary') }}
                        </p>
                    @endif
                </div>
            </div>
        </div>

        {{-- 3rd Row --}}
        <div class="col-xs-offset-1 col-xs-3">
            <div class="row">
                <div class=" form-group">
                <div class="input-group input-group-unstyled">
                <label for="accountSpan">Birthday</label>
                    <div class="input-group input-group-unstyled" id>
                    <input type='text' class="form-control" 
                    name="birthday" id='datepicker' style='width: 300px;' >
                    <span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                    </span>
                   </div>
                    <p class="help-block"></p>
                    @if($errors->has('birthday'))
                        <p class="help-block">
                            {{ $errors->first('birthday') }}
                        </p>
                    @endif
                </div>
                </div>
            </div>

            <div class="row">
                <div class=" form-group">
                    {!! Form::label('source', trans('quickadmin.candidates.fields.source'), ['class' => 'control-label']) !!}
                    {!! Form::select('source', array('Website' => 'Website', 'Friend' => 'Friend','Walk' => 'Walk-In'), '*',array('class'=>'form-control')) !!}
                    <p class="help-block"></p>
                    @if($errors->has('source'))
                        <p class="help-block">
                            {{ $errors->first('source') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class=" form-group">
                    {!! Form::label('work_exp', trans('quickadmin.candidates.fields.work_exp').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('work_exp', old('work_exp'), ['class' => 'form-control', 'placeholder' => 'Work Experience', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('work_exp'))
                        <p class="help-block">
                            {{ $errors->first('work_exp') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class=" form-group">
                    {!! Form::label('skill_set', trans('quickadmin.candidates.fields.skill_set').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('skill_set', old('skill_set'), ['class' => 'form-control', 'placeholder' => 'Skill Set', 'rows' => 3, 'cols' => 40]) !!}
                    <p class="help-block"></p>
                    @if($errors->has('skill_set'))
                        <p class="help-block">
                            {{ $errors->first('skill_set') }}
                        </p>
                    @endif
                </div>
            </div>

        </div>
        </div>
        </div>
        {{-- End of 1st row --}}
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    <a href="{{ route('admin.candidates.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
    {!! Form::close() !!}
@stop
@section('javascript')
    @parent
    
<script type="text/javascript">
$(document).ready(function(){
 $('#datepicker').datepicker(); 
});
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