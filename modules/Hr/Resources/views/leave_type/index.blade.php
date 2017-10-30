@extends('layouts.master')
@section('content')

<ol class="breadcrumb">
  {{-- <li><a href="{{ route('welcome')}}">@lang('global.home')</a></li> --}}
  <li> @lang('hr::jobs.jobs')</a></li>
</ol>


<div class="x_title">
    <h2>@lang('hr::jobs.jobs')</h2>

<div class="clearfix"></div>

</div>
<a href="{{ route('hr.leaveType.create') }}" class="btn btn-primary pull-left" >
    <i class="fa fa-plus"></i> @lang('global.new')
</a>

<div class="clearfix"></div>
@if($leave_types->isEmpty())
<div class="alert alert-info">
   @lang('hr::leave_types.no_jobs')
</div>
@else
{!! Form::open(['route'=>'hr.jop.deleteBulk']) !!}
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
    @foreach($leave_types as $leave_type)
    <tr class="even pointer">
    <td class="a-center ">
            <input type="checkbox" class="tableflat" value='{{$leave_type->id}}' name='table_records[]'>
        </td>
        <td class="a-center ">
            {{ $leave_type->name }}
        </td> 
        <td class="a-center ">
            {{ $leave_type->limit_restrict }}
        </td> 
        <td class="a-center ">
            {{ $leave_type->allow_after_leave }}
        </td>
      
        <td class=" last">
     
            <a href="{{ route('hr.leaveType.edit',$leave_type->id)}}" class='btn btn-sm btn-success'>
                <i class="fa fa-edit"></i> @lang('global.edit')
            </a>
     
            <a href="{{ route('hr.leaveType.delete',$leave_type->id)}}" class="btn btn-danger btn-sm">
            <i class="fa fa-trash"></i> @lang('global.delete')
            </a>

        
        </td>
    @endforeach
</tr>
</tbody>
</table>
<div class="bulk-actions">
<button id='js-delete-all' title='هل أنت متأكد من عملية الحذف ، لا تراجع ؟؟؟' class="btn btn-danger">
<i class="fa fa-trash"></i> @lang('global.delete')
</button>
</div>
<div class="row">
    <div class="col-sm-12 col-md-10">
        {!! $leave_types->render() !!}
    </div>
</div>
@endif
{!!Form::close()!!}
@stop

@section('footer')
<!-- Bootbox -->
<script src="{{ asset('template/js/bootbox.min.js') }}"></script>
@endsection