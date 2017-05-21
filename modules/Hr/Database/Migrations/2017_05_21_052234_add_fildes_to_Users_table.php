<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFildesToUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Users', function(Blueprint $table)
        {
            $table->string('username');
            $table->string('phone');
            $table->string('mobile');
            $table->string('gender');
            $table->timestamp('last_login');
            $table->string('type')->comment('name of table like employees , customers , suppliers ');
 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Users', function(Blueprint $table)
        {
            NestedSet::dropColumns($table);
        });
    }

}
