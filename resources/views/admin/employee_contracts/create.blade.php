@extends('layouts.app')
@section('content')
    <h3 class="page-title">@lang('quickadmin.employee_contracts.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.employee_contracts.store']]) !!}
<div class="panel panel-default">
    <div class="panel-heading">
        @lang('quickadmin.employee_contracts.add_employee_contract')
    </div>
        
        <div class="panel-body">
        <div class="col-xs-12">
                <div class="row">
                    <div class="form-group">
                        {!! Form::label('user_id', trans('quickadmin.employee_contracts.fields.user_id').'*', ['class' => 'control-label']) !!}
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
                        <div class="input-group input-group-unstyled">
                        {!! Form::label('contract_date', trans('quickadmin.employee_contracts.fields.contract_date').'*', ['class' => 'control-label']) !!}
                            <div class="input-group input-group-unstyled">
                            {!! Form::text('contract_date', old('contract_date'), ['class' => 'form-control datepicker', 'placeholder' => 'Date From', 'required' => '','style'=>'width: 1350px;']) !!}

                            <span class="input-group-addon">
                            <i class="glyphicon glyphicon-calendar" >
                            </i>
                            </span>
                           </div>
                            <p class="help-block"></p>
                            @if($errors->has('contract_date'))
                                <p class="help-block">
                                    {{ $errors->first('contract_date') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class=" form-group">
                    {!! Form::label('total_leaves_on_contract', trans('quickadmin.employee_contracts.fields.total_leaves_on_contract').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('total_leaves_on_contract', old('total_leaves_on_contract'), ['class' => 'form-control','place_holder'=>'Total Leave Allocation Based on Contract','required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('total_leaves_on_contract'))
                        <p class="help-block">
                            {{ $errors->first('total_leaves_on_contract') }}
                        </p>
                    @endif
                </div>
                </div>
                <div class="row">
                <div class=" form-group">
                    {!! Form::label('contract_days', trans('quickadmin.employee_contracts.fields.contract_days').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('contract_days','245', ['class' => 'form-control','required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('contract_days'))
                        <p class="help-block">
                            {{ $errors->first('contract_days') }}
                        </p>
                    @endif
                </div>
                </div>
            </div>
        </div>
    </div>
{!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
<a href="{{ route('admin.employee_contracts.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
{!! Form::close() !!}
@stop
@section('javascript')
    @parent
    <script type="text/javascript">
        $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
    </script>
@stop