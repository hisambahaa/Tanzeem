<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onUpdate('CASCADE')
                  ->onDelete('CASCADE');

            $table->integer('department_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('department_id')
                  ->references('id')
                  ->on('departments')
                  ->onUpdate('CASCADE')
                  ->onDelete('CASCADE');

            $table->integer('contract_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('contract_id')
                  ->references('id')
                  ->on('contracts')
                  ->onUpdate('CASCADE')
                  ->onDelete('CASCADE');

            $table->integer('personal_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('personal_id')
                  ->references('id')
                  ->on('personals')
                  ->onUpdate('CASCADE')
                  ->onDelete('CASCADE');


            $table->timestamp('employee_date');
            $table->string('jop_address');
            $table->string('extentio_phone');
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
        Schema::drop('employees');
    }

}
