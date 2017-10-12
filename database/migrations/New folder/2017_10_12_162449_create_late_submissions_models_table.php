


<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateLatesubmissionsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latesubmissions_models', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
           
            $table->string('tutor_id');
            $table->string('question_id');
            
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('latesubmissions_models');
    }
}