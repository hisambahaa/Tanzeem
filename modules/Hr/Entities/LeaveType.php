<?php namespace Modules\Hr\Entities;
   
use Illuminate\Database\Eloquent\Model;

class LeaveType extends Model {

    protected $fillable = ['name',
						  'limit_restric',
						  'allow_after_leave'];

}