<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeavesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->timestamp('from');
            $table->timestamp('to');
            $table->integer('days');
            $table->string('state');
            $table->string('description');

            $table->integer('created_by')
                  ->unsigned()
                  ->nullable();

            $table->foreign('created_by')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

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
        Schema::drop('leaves');
    }

}
