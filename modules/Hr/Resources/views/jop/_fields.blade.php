<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('hr.jop.index')}}" class="btn btn-primary pull-left" novalidate>
        <i class="fa fa-times"></i> @lang('global.cancel')</a>
        <button type="submit" name='submit' value='save' class="btn btn-success pull-left">
        <i class="fa fa-save"></i> @lang('global.save')
        </button>
        <button type="submit" name='submit' value='exit' class="btn btn-default pull-left" novalidate>
        <i class="fa fa-table"></i> @lang('global.save_and_exit')</button>
    </div>
</div>

<div class="clearfix"></div>
<div class="form-group {{ $errors->first('name' ,'has-error') }}">
        {!! Form::label('name', trans('hr::jop.title'), array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
           {!! Form::text('name' ,null,['class'=>'form-control']) !!}
           {!! $errors->first('name' ,'<div class="label label-danger">:message</div>') !!}
        </div>
</div>


<div class="clearfix"></div>
<div class="form-group {{ $errors->first('name' ,'has-error') }}">
    	{!! Form::label('name', trans('hr::jop.description'), array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
    	   {!! Form::textarea('name' ,null,['class'=>'form-control']) !!}
           {!! $errors->first('name' ,'<div class="label label-danger">:message</div>') !!}
        </div>
</div>

<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('hr.jop.index')}}" class="btn btn-primary pull-left" novalidate>
        <i class="fa fa-times"></i> @lang('global.cancel')</a>
        <button type="submit" name='submit' value='save' class="btn btn-success pull-left">
        <i class="fa fa-save"></i> @lang('global.save')
        </button>
        <button type="submit" name='submit' value='exit' class="btn btn-default pull-left" novalidate>
        <i class="fa fa-table"></i> @lang('global.save_and_exit')</button>
    </div>
</div>


