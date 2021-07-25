<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDietablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dietables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('diet_id');
            $table->unsignedBigInteger('dietable_id');
            $table->string('dietable_type');            
            $table->unsignedTinyInteger('meal');                                           
            $table->foreign('diet_id')->references('id')->on('diets')->onDelete('cascade');          
        });     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dietables');
    }
}
