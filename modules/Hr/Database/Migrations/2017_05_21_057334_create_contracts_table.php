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
            $table->string('note');

            $table->integer('jop_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('jop_id')
                  ->references('id')
                  ->on('jops')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

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
