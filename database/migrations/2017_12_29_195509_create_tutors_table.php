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
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('skype')->nullable();
            $table->string('county')->nullable();
            $table->string('phoneno')->nullable();
            $table->string('town')->nullable();
            $table->string('ratings')->nullable();            
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