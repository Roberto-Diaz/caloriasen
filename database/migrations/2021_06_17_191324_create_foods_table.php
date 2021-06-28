<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id');   
            $table->unsignedInteger('group_id');   
            $table->string('name');
            $table->string('slug')->unique();         
            $table->unsignedTinyInteger('status');       
            $table->timestamps();       
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');                                    
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');                                          
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
