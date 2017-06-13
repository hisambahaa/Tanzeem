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
<a href="{{ route('hr.jop.create') }}" class="btn btn-primary pull-left" >
    <i class="fa fa-plus"></i> @lang('global.new')
</a>

<div class="clearfix"></div>
@if($jops->isEmpty())
<div class="alert alert-info">
   @lang('hr::jops.no_jobs')
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

             <th>
                <i class="fa fa-pencil-square-o"></i>@lang('hr::jobs.note')
            </th>            
            <th class=" no-link last"><span class="nobr">
            <i class="fa fa-cog"></i>
            @lang('global.actions')
            </span>
        </th>
    </tr>
</thead>
<tbody>
    @foreach($jops as $jop)
    <tr class="even pointer">
    <td class="a-center ">
            <input type="checkbox" class="tableflat" value='{{$jop->id}}' name='table_records[]'>
        </td>
        <td class="a-center ">
            {{ $jop->title }}
        </td> 
        <td class="a-center ">
            {{ $jop->description }}
        </td> 
        <td class="a-center ">
            {{ $jop->responsibility }}
        </td>
        <td class="a-center ">
            {{ $jop->note}}
        </td>
        <td class=" last">
     
            <a href="{{ route('hr.jop.edit',$jop->id)}}" class='btn btn-sm btn-success'>
                <i class="fa fa-edit"></i> @lang('global.edit')
            </a>
        

     
            <a href="{{ route('hr.jop.delete',$jop->id)}}" class="btn btn-danger btn-sm">
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
        {!! $jops->render() !!}
    </div>
</div>
@endif
{!!Form::close()!!}
@stop

@section('footer')
<!-- Bootbox -->
<script src="{{ asset('template/js/bootbox.min.js') }}"></script>
@endsection