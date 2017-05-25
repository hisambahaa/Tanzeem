<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('type');
            $table->double('salary');
            $table->timestamp('from');
            $table->timestamp('to');

            $table->integer('jop_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('jop_id')
                  ->references('id')
                  ->on('jops')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->integer('user_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
                  
            $table->string('status');

            $table->boolean('auto_renew')
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
        Schema::drop('contracts');
    }

}
