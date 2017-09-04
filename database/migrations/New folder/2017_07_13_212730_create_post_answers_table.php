<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table-> string('question_id');
            $table-> boolean('answered');
            $table-> text('answer_body');
            $table->text('overdue');
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
        Schema::dropIfExists('post_answers');
    }
}
