
<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Hr\Http\Controllers'], function()
{
	 Route::get('/', 'HrController@index');

	Route::group(['prefix'=>'jop'] ,function() {
		
		Route::get('/', [
				'as'=>'hr.jop.index',
				'uses'=>'JopController@index'
				]);
		
		Route::get('create', [
				'as'=>'hr.jop.create',
				'uses'=>'JopController@create'
				]);
		
		Route::post('store', [
				'as'=>'hr.jop.store',
				'uses'=>'JopController@store'
				]);
		
		Route::get('edit', [
				'as'=>'hr.jop.edit',
				'uses'=>'JopController@edit'
				]);
		
		Route::post('update', [
				'as'=>'hr.jop.update',
				'uses'=>'JopController@update'
				]);
		Route::post('delete', [
				'as'=>'hr.jop.delete',
				'uses'=>'JopController@delete'
				]);

		
	});


});