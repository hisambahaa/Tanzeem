@extends('layouts.master')

@section('content')

{!! Form::open(['route'=>'hr.leaveType.store' ,'method' => 'post' ,'class'=>'form-horizontal']) !!}
         {{-- {{ csrf_field() }} --}}

   @include('hr::leave_type._fields')

{!! Form::close() !!}
@stop