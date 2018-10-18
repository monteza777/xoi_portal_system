<tr data-index="{{ $index }}">
	<td>
	{!! Form::text('details['.$index.'][company_name]',
		old('details['.$index.'][company_name]', isset($field) ? $field->company_name: ''), ['class' => 'form-control', 'placeholder'=>'Company Name']) !!}
	</td>

	<td>
	{!! Form::text('details['.$index.'][designation]',
		old('details['.$index.'][designation]', isset($field) ? $field->designation: ''), ['class' => 'form-control','placeholder'=> 'Designation']) !!}
	</td>
	<td>
	{!! Form::date('details['.$index.'][date_from]',
		old('details['.$index.'][date_from]', isset($field) ? $field->date_from: ''), ['class' => 'form-control']) !!}
	</td>
	<td>
	{!! Form::date('details['.$index.'][date_to]',
		old('details['.$index.'][date_to]', isset($field) ? $field->date_to: ''), ['class' => 'form-control']) !!}
	</td>
    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('quickadmin.qa_delete')</a>
    </td>
</tr>