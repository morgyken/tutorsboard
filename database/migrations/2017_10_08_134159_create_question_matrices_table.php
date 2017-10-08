<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionMatricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_matrices', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->rememberToken();
            $table->integer('question_id');
            $table->integer('current')->nullable();
            $table->integer('reassigned')->nullable();
            $table->integer('completed')->nullable();
            $table->integer('rated')->nullable();
            $table->integer('paid')->nullable();
            $table->integer('revision')->nullable();
            $table->integer('cancelled')->nullable();
            $table->integer('assigned')->nullable();
            $table->integer('answered')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_matrices');
    }
}
