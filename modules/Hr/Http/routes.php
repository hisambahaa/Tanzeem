<?php

Route::group(['middleware' => 'web', 'prefix' => 'hr', 'namespace' => 'Modules\Hr\Http\Controllers'], function()
{
	Route::get('/', 'HrController@index');

	Route::get('ghghgh',
		[
		'as'=>'users.edit' , 'HrController@index2']);
});