<?php namespace Modules\Hr\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
		 DB::table('users')->delete();
    User::create(array(
        'name'     => 'Sami Almamari',
        'username' => 'samialmamari',
        'email'    => 'sami.almamari@css.edu.om',
        'password' => Hash::make('123456')
    ));
	}

}