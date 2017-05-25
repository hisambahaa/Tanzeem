<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Kalnoy\Nestedset\NestedSet;

class CreateDepartmentsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->integer('manager_user_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('manager_user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
                  
            NestedSet::columns($table);


            $table->string('note');
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('departments');
    }

}
