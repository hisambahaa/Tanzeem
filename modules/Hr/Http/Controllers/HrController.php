<?php namespace Modules\Hr\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class HrController extends Controller {
	
	public function index()
	{
		return view('hr::index');
	}

	public function index2()
	{
		return view('hr::index');
	}
	
}