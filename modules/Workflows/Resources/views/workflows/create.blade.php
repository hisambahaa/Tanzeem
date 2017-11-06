@extends('layouts.master')

@section('content')

          <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-home"></i> الرئيسيه </a>
            </li>
            <li class="active">خطط سير العمل</li>
          </ol>
    <!-- page title -->
<!--           <h2 style="padding: 0 30px;">
          <span class="fa fa-circle-o text-blue"></span> 
            قائمة
            <small>سير العمل</small>
            
            <a href="{{ route('workflows.workflow.create') }}" class="btn btn-primary btn-lg pull-left" >
                <i class="fa fa-plus"></i> @lang('global.new')
            </a>

          </h2> -->


<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-plus"></i>اضافة مخطط جديد</h3>
                </div><!-- /.box-header -->
                <!-- form start -->

{!! Form::open(['route'=>'workflows.workflow.store' ,'method' => 'post' ,'class'=>'form-horizontal']) !!}

   @include('workflows::workflows._fields')

{!! Form::close() !!}

</div>

@stop