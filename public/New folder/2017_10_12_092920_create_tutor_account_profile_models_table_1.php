<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorAccountProfileModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_account_profile_models', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
             $table->rememberTocken();
            $table->string('tutor_id');
            $table->string('writerlevel');
            $table->string('mpesaline');
            $table->string('paypal');
            $table->string('ratings');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutor_account_profile_models');
    }
}
