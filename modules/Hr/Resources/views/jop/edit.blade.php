@extends('layouts.master')

@section('content')

{!! Form::model($jop,['route'=>['hr.jop.update', $jop->id],'class'=>'form-horizontal form-label-left'])!!}
@include('hr::jop._fields')
	{!!Form::close()!!}
@stop