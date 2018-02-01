<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorProgressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_progresses', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('id');           
            $table->rememberToken();
            $table->string('tutor_id');
            $table->string('qascore')->nullable();
            $table->string('revisions')->nullable();
            $table->string('late_uploads')->nullable();
            $table->string('refunds')->nullable();
            $table->string('total')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutor_progresses');
    }
}
