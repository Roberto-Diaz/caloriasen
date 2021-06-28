<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExerciseRoutineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise_routine', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('exercise_id');
            $table->unsignedBigInteger('routine_id');
            $table->unsignedTinyInteger('reps');       
            $table->unsignedTinyInteger('sets');       
            $table->unsignedTinyInteger('interval');            
            $table->unsignedTinyInteger('weight');          
            $table->unsignedSmallIntegerInteger('calorias_burned');       
            $table->unsignedTinyInteger('status');                      
            $table->timestamps();   
            $table->foreign('exercise_id')->references('id')->on('exercises')->onDelete('cascade');
            $table->foreign('routine_id')->references('id')->on('routines')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercise_routine');
    }
}
