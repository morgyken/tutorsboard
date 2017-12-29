<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateTutorEducationModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_education_models', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->rememberTocken();
            $table->string('tutor_id');
            $table->string('college');
            $table->string('expertise');
           
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutor_education_models');
    }
}