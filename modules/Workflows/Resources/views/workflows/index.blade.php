@extends('layouts.master')

@section('header')
          <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-home"></i> الرئيسيه </a>
            </li>
            <li class="active">خطط سير العمل</li>
          </ol>
    <!-- page title -->
          <h2 style="padding: 0 30px;">
          <span class="fa fa-circle-o text-blue"></span> 
            قائمة
            <small>سير العمل</small>
            
            <a href="{{ route('workflows.workflow.create') }}" class="btn btn-primary btn-lg pull-left" >
                <i class="fa fa-plus"></i> @lang('global.new')
            </a>

          </h2>
@stop


@section('content')


@if($workflows->isEmpty())

    <div class="callout callout-warning">
        <h4>لا يوجد </h4>
        <p>القائمه فارغه.</p>
    </div>

@else
<table  class="table table-hover table-striped table-bordered responsive-utilities bulk_action jambo_table">
    <thead>
        <tr class="headings">
            <th>
                <input type="checkbox" id='check-all' class="tableflat">
            </th>
            <th>
                <i class="fa fa-pencil-square-o"></i>@lang('hr::jobs.title')
            </th>  
            <th>
                <i class="fa fa-pencil-square-o"></i>@lang('hr::jobs.description')
            </th>    

             <th>
                <i class="fa fa-pencil-square-o"></i>@lang('hr::jobs.responsibility')
            </th> 

                       
            <th class=" no-link last"><span class="nobr">
            <i class="fa fa-cog"></i>
            @lang('global.actions')
            </span>
        </th>
    </tr>
</thead>
<tbody>
    @foreach($workflows as $workflow)
    <tr class="even pointer">
    <td class="a-center ">
            <input type="checkbox" class="tableflat" value='{{$leave_type->id}}' name='table_records[]'>
        </td>
        <td class="a-center ">
            {{ $workflow->name }}
        </td> 
        <td class="a-center ">
            {{ $workflow->limit_restrict }}
        </td> 
        <td class="a-center ">
            
        </td>
      
        <td class=" last">
     
            <a href="{{ route('workflows.workflows.edit',$leave_type->id)}}" class='btn btn-sm btn-success'>
                <i class="fa fa-edit"></i> @lang('global.edit')
            </a>
     
            <a href="{{ route('workflows.workflows.delete',$leave_type->id)}}" class="btn btn-danger btn-sm">
            <i class="fa fa-trash"></i> @lang('global.delete')
            </a>

        
        </td>
    @endforeach
</tr>
</tbody>
</table>
<div class="row">
    <div class="col-sm-12 col-md-10">
        {!! $workflows->render() !!}
    </div>
</div>
@endif
@stop

@section('footer')
<!-- Bootbox -->
<script src="{{ asset('template/js/bootbox.min.js') }}"></script>
@endsection