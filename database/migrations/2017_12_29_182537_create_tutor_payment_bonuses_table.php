<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorPaymentBonusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_payment_bonuses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('tutor_id');
            $table->text('payment_id');           
            $table->text('paid_by');                  
            $table->text('amount');
             $table->text('order_id');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutor_payment_bonuses');
    }
}
