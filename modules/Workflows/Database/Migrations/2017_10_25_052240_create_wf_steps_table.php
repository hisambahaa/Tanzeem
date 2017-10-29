<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWfStepsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wf_steps', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string("name");

            $table->integer('created_by')
                  ->index()
                  ->unsigned()
                  ->nullable();

            $table->foreign('created_by')
                  ->references('id')
                  ->on('users')
                  ->onDelete('SET NULL')
                  ->onUpdate('SET NULL');

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
        Schema::drop('wf_steps');
    }

}
