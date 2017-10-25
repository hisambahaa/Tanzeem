<?php namespace Modules\Workflows\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class StepsController extends Controller {
	
	public function index()
	{
		return view('workflows::index');
	}
	
}