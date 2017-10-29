<?php namespace Modules\Hr\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Hr\Entities\Jop;
use Pingpong\Modules\Routing\Controller;

class JopController extends Controller {
	
	public function index()
	{
		$jops = jop::paginate(20);
		return view('hr::jop.index', compact('jops'));
	}
	
	public function create(){

		return view('hr::jop.create');
	}

	public function store(Request $request, Jop $jop){
		// dd($request->all());
		$jop->fill($request->all())->save();

		$message = "تم الإضافه بنجاح ";
		  if(request('submit')=='save')
            return redirect()->back()->with('success',$message);
        return redirect()->route('hr.jop.index')->with('success',$message);

	}

	public function edit($id, jop $jop)
    {
         $jop = $jop->findOrfail($id);
        return view('hr::jop.edit',compact('jop'));
    }


	public function update($id, Request $request)
    {   $jop = jop::findOrfail($id);
        $jop->fill($request->all())->save();

        $message = trans('hr::jop.update_record');
        if(request('submit')=='save')
            return redirect()->back()->with('success',$message);
        return redirect()->route('hr.jop.index')->with('success',$message);
    }

    public function delete($id){
        $jop = jop::findOrfail($id)->delete();

        $message ="تم حذف العنوان بنجاح";
        return redirect()->back()->with('success',$message);
    }


    public function deletebulk(Request $request, jop $jop)
    {
        // if the table_records is empty we redirect to the jop index
        if(!$request->has('table_records')) return redirect()->route('hr.jop.index');
        $message ="تم حذف الوظيفه بنجاح";
        // we get all the ids and put them in a variable
        $ids = $request->input('table_records');
        // we delete all the jop with the ids $ids
        $jop->destroy($ids);
        // we redirect to the user index view with a success message
        return redirect()->route('hr.jop.index')->with('success', $message);
    }
}