@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.employee_contracts.title')</h3>
    @can('user_create')
    <p>
        <a href="{{ route('admin.employee_contracts.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan
    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>


        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($employee_contracts) > 0 ? 'datatable' : '' }} @can('user_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('user_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.employee_contracts.fields.user_id')</th>
                        <th>@lang('quickadmin.employee_contracts.fields.contract_date')</th>
                        <th>@lang('quickadmin.employee_contracts.fields.contract_days')</th>
                        <th>@lang('quickadmin.employee_contracts.fields.total_leaves_on_contract')</th>
                        <th>@lang('quickadmin.employee_contracts.fields.leaves_allocation')</th>
                        <th>@lang('quickadmin.employee_contracts.fields.leaves_taken')</th>
                        <th>@lang('quickadmin.employee_contracts.fields.leaves_balance')</th>
                        <th>@lang('quickadmin.action')</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($employee_contracts) > 0)
                        @foreach ($employee_contracts as $emp_contracts)
                            <tr data-entry-id="{{ $emp_contracts->id }}">
                                @can('user_delete')
                                    <td></td>
                                @endcan

                                <td field-key='name'>{{ $emp_contracts->user->first_name.' '.$emp_contracts->user->last_name}}</td>
                                <td field-key='email'>{{ $emp_contracts->contract_date->format('d M Y') }}</td>
                                <td field-key='role'>{{ $emp_contracts->contract_days }}</td>
                                <td field-key='role'>{{ $emp_contracts->total_leaves_on_contract }}</td>
                                <td field-key='role' class="text-center leave_font">{{ $emp_contracts->days_since_contract['allocation'] }}
                                </td>
                                <td field-key='role' class="text-center">
                                    {{$emp_contracts->leaves_taken['count']}}
                                </td>
                                <td field-key='role' class="text-center">
                                    {{$emp_contracts->leaves_taken['balance']}}
                                </td>
                                <td>
                                    @can('user_view')
                                    <a href="{{ route('admin.employee_contracts.show',[$emp_contracts->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('user_edit')
                                    <a href="{{ route('admin.employee_contracts.edit',[$emp_contracts->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('user_delete')
                            {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.employee_contracts.destroy', $emp_contracts->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('user_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.users.mass_destroy') }}';
        @endcan

    </script>
@endsection