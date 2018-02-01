<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_accounts', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('id');           
            $table->rememberToken();
            $table->string('account_id'); 
            $table->string('tutor_id');
            $table->string('account_level')->nullable();
            $table->string('account_status')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_account')->nullable(); 
            $table->string('ratings')->nullable(); 
            $table->string('active')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutor_accounts');
    }
}
