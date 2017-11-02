<?php

Route::group(['middleware' => 'web', 
			'prefix' => 'admin', 
			'namespace' => 'Modules\Workflows\Http\Controllers'], function(){

			Route::group(['prefix' => 'workflow'] , function(){

				Route::get('/', [
					'as'  =>'workflows.workflow.index',
					'uses'=>'WorkflowsController@index'
				]);
				Route::get('/create', [
					'as'  =>'workflows.workflow.create',
					'uses'=>'WorkflowsController@create'
				]);
				Route::post('/store', [
					'as'  =>'workflows.workflow.store',
					'uses'=>'WorkflowsController@store'
				]);
				Route::get('/edit', [
					'as'  =>'workflows.workflow.edit',
					'uses'=>'WorkflowsController@edit'
				]);
				Route::post('/update', [
					'as'  =>'workflows.workflow.update',
					'uses'=>'WorkflowsController@update'
				]);
				Route::get('/delete', [
					'as'  =>'workflows.workflow.delete',
					'uses'=>'WorkflowsController@delete'
				]);

			});

	/////////////////////


			Route::group(['prefix' => 'steps'] , function(){
				Route::get('/', [
					'as'  =>'workflows.steps.index',
					'uses'=>'StepsController@index'
				]);
				Route::get('/create', [
					'as'  =>'workflows.steps.create',
					'uses'=>'StepsController@create'
				]);
				Route::post('/store', [
					'as'  =>'workflows.steps.store',
					'uses'=>'StepsController@store'
				]);
				Route::get('/edit', [
					'as'  =>'workflows.steps.edit',
					'uses'=>'StepsController@edit'
				]);
				Route::post('/update', [
					'as'  =>'workflows.steps.update',
					'uses'=>'StepsController@update'
				]);
				Route::get('/delete', [
					'as'  =>'workflows.steps.delete',
					'uses'=>'StepsController@delete'
				]);
			});	

});