<?php namespace Modules\Workflows\Entities;
   
use Illuminate\Database\Eloquent\Model;

class WorkflowStepUser extends Model {

    protected $fillable = [];


    public function fromstep()
	{
		return $this->belongsTo('\Modules\Workflows\Entities\step', 'from_step_id');
	}

    public function tostep()
	{
		return $this->belongsTo('\Modules\Workflows\Entities\step', 'to_step_id');
	}

    public function workflow()
	{
		return $this->belongsTo('\Modules\Workflows\Entities\Workflow', 'wf_id');
	}

}