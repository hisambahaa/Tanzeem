<?php namespace Modules\Hr\Http\Controllers;

use Modules\Hr\Entities\LeaveType;
use Pingpong\Modules\Routing\Controller;

class LeaveTypeController extends Controller {
	
	public function index()
	{
		$leave_types = LeaveType::select('*')->get();

		return view('hr::leave_type.index', compact('leave_types'));
	}

	public function create(){

		return view('hr::leave_type.create');
	}

	public function store(Request $request, LeaveType $leaveType){
		// dd($request->all());
		$leaveType->fill($request->all())->save();

		$message = "تم الإضافه بنجاح ";
		  if(request('submit')=='save')
            return redirect()->back()->with('success',$message);
        return redirect()->route('hr.leaveType.index')->with('success',$message);

	}

	public function edit(){

		return view('hr::leave_type.edit');
	}

	public function update(){

		return view('hr::leave_type.index');
	}

	public function delete(){

		return view('hr::leave_type.index');
	}
	
}