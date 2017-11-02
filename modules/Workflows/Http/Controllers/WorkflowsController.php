<?php namespace Modules\Workflows\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Illuminate\Http\Request;
use Modules\Workflows\Entities\Workflow;

class WorkflowsController extends Controller {
	
	public function index(request $request)
	{
		$workflows = Workflow::OrderBy('created_at');

		$per_page = request('per_page') ? request('per_page') : 30;

		$workflows= $workflows->paginate($per_page);

		$workflows->appends($request->except("page"));

		return view('workflows::workflows.index' , compact('workflows'));
	}

	public function create(request $request)
	{

		return view('workflows::workflows.create');	

	}

	public function store(request $request)
	{
		dd('sss');
	}

	public function edit($wf_id)
	{

		$workflow = Workflow::find($wf_id);

		return view('workflows::workflows.edit' , compact('workflow'));	
	}

	public function update(request $request)
	{

	}

	public function delete(request $request)
	{

	}
	
}