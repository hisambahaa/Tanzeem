<?php namespace Modules\Hr\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class JopController extends Controller {
	
	public function index()
	{
		//dd('dqwdd');
		return view('hr::index');
	}
	
	public function create(){

		return view('hr::jop.create');
	}

	public function store(){
		dd("sdadsda");
	}

	public function edit(){

	}

	public function update(){

	}

	public function delete(){

	}
}