<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Hr\Http\Controllers'], function()
{
	// Route::get('/', 'HrController@index');

	Route::group(['prefix'=>'hr'] ,function() {
		
		Route::get('/', [
				'as'=>'hr.index',
				'uses'=>'HrController@index'
				]);
		
		Route::get('create', [
				'as'=>'hr.create',
				'uses'=>'HrController@create'
				]);
		
		Route::post('store', [
				'as'=>'hr.store',
				'uses'=>'HrController@store'
				]);
		
		Route::get('edit', [
				'as'=>'hr.edit',
				'uses'=>'HrController@edit'
				]);
		
		Route::post('update', [
				'as'=>'hr.update',
				'uses'=>'HrController@update'
				]);
		Route::post('delete', [
				'as'=>'hr.delete',
				'uses'=>'HrController@delete'
				]);

		
	});

});