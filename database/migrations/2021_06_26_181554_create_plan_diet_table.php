<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanDietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_diet', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plan_id');
            $table->unsignedBigInteger('diet_id');
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->unsignedTinyInteger('status');                  
            $table->timestamps();
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('no action');
            $table->foreign('diet_id')->references('id')->on('diets')->onDelete('no action');         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_diet');
    }
}
