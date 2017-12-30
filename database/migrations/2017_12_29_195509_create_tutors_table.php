<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->rememberToken();
            $table->string('tutor_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('skype');
            $table->string('county');
            $table->string('cardnumber');
            $table->string('phoneno');
            $table->string('town');
            $table->string('ratings');
            $table->string('level');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutor_profile');
    }
}