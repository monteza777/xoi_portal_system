@extends('layouts.app')
@section('content')
    <h3 class="page-title">@lang('quickadmin.candidates.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.attendances.store'],'files'=>true]) !!}
     <div class="panel panel-default">
        <div class="panel-heading">
        </div>
        
        <div class="panel-body">

            <div class="col-xs-12">
                <div class='input-group pull-right' id='m_daterangepicker_6'>
                     <input type='text' class="form-control m-input" readonly  placeholder="Select date range"/>
                     <span class="input-group-addon">
                          <i class="fa fa-calendar fa-fw" aria-hidden="true"></i>
                     </span>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
  
    </div>
    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    <a href="{{ route('admin.attendances.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
    {!! Form::close() !!}
@stop
@section('javascript')
    @parent
<script type="text/html" id="details-template">
    <script>
      var BootstrapDaterangepicker = function () {

  //== Private functions
   var demos = function () {
    // minimum setup
    $('#m_daterangepicker_1, #m_daterangepicker_1_modal').daterangepicker({
        buttonClasses: 'm-btn btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary'
       });

    // input group and left alignment setup
    $('#m_daterangepicker_2').daterangepicker({
        buttonClasses: 'm-btn btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary'
        }, function(start, end, label) {
        $('#m_daterangepicker_2 .form-control').val( start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
    });

     $('#m_daterangepicker_2_modal').daterangepicker({
        buttonClasses: 'm-btn btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary'
        }, function(start, end, label) {
        $('#m_daterangepicker_2 .form-control').val( start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
      });

    // left alignment setup
    $('#m_daterangepicker_3').daterangepicker({
        buttonClasses: 'm-btn btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary'
        }, function(start, end, label) {
        $('#m_daterangepicker_3 .form-control').val( start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
    });

      $('#m_daterangepicker_3_modal').daterangepicker({
        buttonClasses: 'm-btn btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary'
         }, function(start, end, label) {
        $('#m_daterangepicker_3 .form-control').val( start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
       });


    // date & time
      $('#m_daterangepicker_4').daterangepicker({
        buttonClasses: 'm-btn btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary',

        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY h:mm A'
         }
        }, function(start, end, label) {
        $('#m_daterangepicker_4 .form-control').val( 
  start.format('MM/DD/YYYY h:mm A') + ' / ' + end.format('MM/DD/YYYY h:mm A'));
      });

    // date picker
       $('#m_daterangepicker_5').daterangepicker({
        buttonClasses: 'm-btn btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary',

        singleDatePicker: true,
        showDropdowns: true,
        locale: {
            format: 'MM/DD/YYYY'
        }
       }, function(start, end, label) {
        $('#m_daterangepicker_5 .form-control').val( 
  start.format('MM/DD/YYYY') + ' / ' + end.format('MM/DD/YYYY'));
    });

    // predefined ranges
    var start = moment().subtract(29, 'days');
    var end = moment();

    $('#m_daterangepicker_6').daterangepicker({
        buttonClasses: 'm-btn btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary',

        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), 
moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), 
moment().subtract(1, 'month').endOf('month')]
        }
       }, function(start, end, label) {
        $('#m_daterangepicker_6 .form-control').val( 
   start.format('MM/DD/YYYY') + ' / ' + end.format('MM/DD/YYYY'));
       });
     }

   var validationDemos = function() {
    // input group and left alignment setup
      $('#m_daterangepicker_1_validate').daterangepicker({
        buttonClasses: 'm-btn btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary'
        }, function(start, end, label) {
        $('#m_daterangepicker_1_validate .form-control').val( 
     start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
      });

     // input group and left alignment setup
     $('#m_daterangepicker_2_validate').daterangepicker({
        buttonClasses: 'm-btn btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary'
         }, function(start, end, label) {
        $('#m_daterangepicker_3_validate .form-control').val( 
         start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
        });

    // input group and left alignment setup
       $('#m_daterangepicker_3_validate').daterangepicker({
        buttonClasses: 'm-btn btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary'
        }, function(start, end, label) {
        $('#m_daterangepicker_3_validate .form-control').val( 
    start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
    });        
     }

    return {
    // public functions
    init: function() {
        demos(); 
        validationDemos();
    }
  };
 }();

jQuery(document).ready(function() {    
BootstrapDaterangepicker.init();
});
    </script>
</script>
@stop