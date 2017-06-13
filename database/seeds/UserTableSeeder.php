<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->delete();
    User::create(array(
        'name'     => 'Sami Almamari',
        'username' => 'samialmamari',
        'email'    => 'sami.almamari@css.edu.om',
        'password' => Hash::make('123456'),
    ));
    }
}
