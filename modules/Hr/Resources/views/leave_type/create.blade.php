@extends('layouts.master')

@section('content')

{!! Form::open(['route'=>'hr.jop.store' ,'method' => 'post' ,'class'=>'form-horizontal']) !!}
         {{ csrf_field() }}

   @include('hr::jop._fields')

{!! Form::close() !!}
@stop