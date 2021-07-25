<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('objetive_id');
            $table->unsignedInteger('activity_id');
            $table->string('name'); 
            $table->enum('sex',['Hombre','Mujer']);             
            $table->unsignedTinyInteger('age');
            $table->decimal('height',3,2);                                                                                         
            $table->decimal('weight',4,1);                                                                                              
            $table->decimal('bmi',3,1)->nullable();             
            $table->decimal('kcal',5,1);                                                                               
            $table->decimal('protein',5,1);                                                                           
            $table->decimal('carbohydrate',5,1);                                                                               
            $table->decimal('fat',5,1);                                                                               
            $table->decimal('fiber',5,1);                                                                           
            $table->dateTime('date_start');
            $table->dateTime('date_end');   
            $table->unsignedTinyInteger('meals');                                                                                       
            $table->unsignedTinyInteger('workout_days');                                                                                      
            $table->unsignedTinyInteger('workout_weeks');                                                                                         
            $table->unsignedTinyInteger('status');              
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');          
            $table->foreign('objetive_id')->references('id')->on('objetives')->onDelete('cascade');          
            $table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade');                                                                                        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
}
