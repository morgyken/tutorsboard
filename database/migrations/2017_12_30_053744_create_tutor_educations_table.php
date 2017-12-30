<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_education', function (Blueprint $table) {
           $table->timestamps();
            $table->increments('id');           
            $table->rememberToken();
            $table->string('tutor_id');
            $table->string('highschool')->nullable();
            $table->string('college')->nullable();
            $table->string('areaofstudy')->nullable();
            $table->string('language')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutor_education');
    }
}

