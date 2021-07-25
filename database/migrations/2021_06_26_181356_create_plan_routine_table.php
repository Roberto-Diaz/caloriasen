<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanRoutineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_routine', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plan_id');
            $table->unsignedBigInteger('routine_id');
            $table->unsignedTinyInteger('status');        
            $table->unsignedTinyInteger('week');        
            $table->unsignedTinyInteger('day');        
            $table->date('date');   
            $table->timestamps();
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('no action');   
            $table->foreign('routine_id')->references('id')->on('routines')->onDelete('no action');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_routine');
    }
}
