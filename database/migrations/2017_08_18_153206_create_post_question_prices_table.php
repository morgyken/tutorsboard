<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostQuestionPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_question_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->text('question_id');
            $table->integer('paid')->nullable();
            $table->integer('question_price');
            $table->string('urgency');
            $table->string('tutor_price');
            $table->string('paper_format');
            $table->string('academic_level');
            $table->string('pages');
            $table->dateTime('question_deadline');
            $table->rememberToken();
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
        Schema::dropIfExists('post_question_prices');
    }
}
