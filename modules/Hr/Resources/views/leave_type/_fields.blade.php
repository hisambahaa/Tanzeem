<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('hr.leaveType.index')}}" class="btn btn-primary pull-left" novalidate>
        <i class="fa fa-times"></i> @lang('global.cancel')</a>
        <button type="submit" name='submit' value='save' class="btn btn-success pull-left">
        <i class="fa fa-save"></i> @lang('global.save')
        </button>
        <button type="submit" name='submit' value='exit' class="btn btn-default pull-left" novalidate>
        <i class="fa fa-table"></i> @lang('global.save_and_exit')</button>
    </div>
</div>

<div class="clearfix"></div>
<div class="form-group ">
        {!! Form::label('name', trans('hr::jobs.title'), array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
           {!! Form::text('title' ,null,['class'=>'form-control']) !!}
        </div>
</div>


<div class="clearfix"></div>
<div class="form-group ">
        {!! Form::label('limit_restrict', trans('hr::jobs.description'), array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
           {!! Form::textarea('limit_restrict' ,null,['class'=>'form-control']) !!}
        </div>
</div>

<div class="clearfix"></div>
<div class="form-group ">
    	  {!! Form::label('limit_restrict', 'تفعيل الايميل ', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}

                  {!! Form::checkbox('email_verified' , 1 ,null ,['class'=>'icheckbox_square-green checked col-md-1 col-sm-1 col-xs-1','required'=>'required']) !!}

                        </div>

</div>

<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('hr.leaveType.index')}}" class="btn btn-primary pull-left" novalidate>
        <i class="fa fa-times"></i> @lang('global.cancel')</a>
        <button type="submit" name='submit' value='save' class="btn btn-success pull-left">
        <i class="fa fa-save"></i> @lang('global.save')
        </button>
        <button type="submit" name='submit' value='exit' class="btn btn-default pull-left" novalidate>
        <i class="fa fa-table"></i> @lang('global.save_and_exit')</button>
    </div>
</div>


