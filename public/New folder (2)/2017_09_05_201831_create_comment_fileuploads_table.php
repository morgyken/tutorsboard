<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentFileuploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_fileuploads', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->rememberToken();
            $table->string('question_id');
            $table->string('comment_id');
            $table->string('filename');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_fileuploads');
    }
}
