@extends('layouts.app')
@section('content')
    <h3 class="page-title">@lang('quickadmin.leave_managements.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.leave_managements.store'],'files'=>true]) !!}
<div class="panel panel-default">
    <div class="panel-heading">
        @lang('quickadmin.leave_managements.add_leave')
    </div>
        
        <div class="panel-body">
        <div class="col-xs-12">
            <div class="col-xs-4">
                
                <div class="row">
                    <div class=" form-group">
                        <div class="input-group input-group-unstyled">
                        <label for="accountSpan">Date From</label>
                            <div class="input-group input-group-unstyled">
                            {!! Form::text('start_date', old('start_date'), ['class' => 'form-control datepicker', 'placeholder' => 'Date From', 'required' => '','style'=>'width: 415px;']) !!}

                            <span class="input-group-addon">
                            <i class="glyphicon glyphicon-calendar" >
                            </i>
                            </span>
                           </div>
                            <p class="help-block"></p>
                            @if($errors->has('start_date'))
                                <p class="help-block">
                                    {{ $errors->first('start_date') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        {!! Form::label('user_id', trans('quickadmin.leave_managements.fields.fullname').'*', ['class' => 'control-label']) !!}
                        {!! Form::select('user_id',$users,null, array('class'=>'form-control','required' => '')) !!}
                        <p class="help-block"></p>
                        @if($errors->has('user_id'))
                            <p class="help-block">
                                {{ $errors->first('user_id') }}
                                </p>
                        @endif
                    </div>
                </div>
                <div class="row">
                <div class=" form-group">
                    {!! Form::label('leave_type', trans('quickadmin.leave_managements.fields.leave_type').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('leave_type', array('VL' => 'Vacation Leave', 'SL' => 'Sick Leave'), '*',array('class'=>'form-control','required' => '')) !!}
                    <p class="help-block"></p>
                    @if($errors->has('leave_type'))
                        <p class="help-block">
                            {{ $errors->first('leave_type') }}
                        </p>
                    @endif
                </div>
                </div>
            </div>

            <div class="col-xs-4 col-xs-offset-1">
                <div class="row">
                    <div class=" form-group">
                        <div class="input-group input-group-unstyled">
                        <label for="accountSpan">Date To</label>
                            <div class="input-group input-group-unstyled">
                            {!! Form::text('end_date', old('end_date'), ['class' => 'form-control datepicker', 'placeholder' => 'Date To','style'=>'width: 415px;']) !!}
                            <span class="input-group-addon">
                            <i class="glyphicon glyphicon-calendar" id='datepicker'>
                            </i>
                            </span>
                           </div>
                            <p class="help-block"></p>
                            @if($errors->has('end_date'))
                                <p class="help-block">
                                    {{ $errors->first('end_date') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class=" form-group">
                    {!! Form::label('reason', trans('quickadmin.leave_managements.fields.reason'), ['class' => 'control-label']) !!}
                    {!! Form::textarea('reason', old('reason'), ['class' => 'form-control', 'placeholder' => 'Reason']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('reason'))
                        <p class="help-block">
                            {{ $errors->first('reason') }}
                        </p>
                    @endif
                </div>
                </div> 
            </div>
            </div>
        </div>
    </div>
{!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
<a href="{{ route('admin.attendances.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
{!! Form::close() !!}
@stop
@section('javascript')
    @parent
    <script type="text/javascript">
        $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
    </script>
@stop