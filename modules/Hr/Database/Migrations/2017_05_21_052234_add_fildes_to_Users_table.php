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
        Schema::table('users', function(Blueprint $table)
        {
            $table->string('username');
            $table->string('phone');
            $table->string('mobile');
            $table->string('gender');
            $table->timestamp('last_login');
            $table->string('type')
                    ->comment('name of table like employees , customers , suppliers ');
            $table->string('status');

            $table->integer('department_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('department_id')
                  ->references('id')
                  ->on('departments')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->string('note');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table)
        {
            NestedSet::dropColumns($table);
        });
    }

}
