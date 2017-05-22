<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function(Blueprint $table)
        {
            $table->increments('id');
           
            $table->string('natioalty');
            $table->string('nationalid');
            $table->string('passport');
            $table->string('bank_account');
            $table->timestamp('birth_date');
            $table->string('edu_dgree');
            $table->string('edu_specilty');
            $table->string('edu_graduate_year');
            $table->string('experience');
            $table->string('social_state');

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
        Schema::drop('personals');
    }

}
