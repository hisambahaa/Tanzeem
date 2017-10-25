<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWfWorkflowStepUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wf_workflow_step_users', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string("name");


            $table->integer('wf_id')
                  ->index()
                  ->unsigned()
                  ->nullable();

            $table->foreign('wf_workflows')
                  ->references('id')
                  ->on('users')
                  ->onDelete('SET NULL')
                  ->onUpdate('SET NULL');


            $table->integer('from_step_id')
                  ->index()
                  ->unsigned()
                  ->nullable();

            $table->foreign('from_step_id')
                  ->references('id')
                  ->on('wf_steps')
                  ->onDelete('SET NULL')
                  ->onUpdate('SET NULL');


            $table->integer('to_step_id')
                  ->index()
                  ->unsigned()
                  ->nullable();

            $table->foreign('to_step_id')
                  ->references('id')
                  ->on('wf_steps')
                  ->onDelete('SET NULL')
                  ->onUpdate('SET NULL');

            $table->integer('user_id')
                  ->index()
                  ->unsigned()
                  ->nullable();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('SET NULL')
                  ->onUpdate('SET NULL');

            $table->enum("order", ['next', "last" , "cancel"])->nullable();

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
        Schema::drop('wf_workflow_step_users');
    }

}
