<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNutrientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutrients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nutrientable_id');
            $table->string('nutrientable_type');
            $table->unsignedInteger('unit_id'); 
            $table->unsignedSmallInteger('g');
            $table->unsignedSmallInteger('kcal');
            $table->unsignedSmallInteger('kj')->nullable();
            $table->unsignedSmallInteger('total_fat');
            $table->unsignedSmallInteger('trans_fat');
            $table->unsignedSmallInteger('saturated_fat');
            $table->unsignedSmallInteger('monounsaturated')->nullable();
            $table->unsignedSmallInteger('polyunsaturated')->nullable();
            $table->unsignedSmallInteger('cholesterol');
            $table->unsignedSmallInteger('carbohydrate');
            $table->unsignedSmallInteger('fiber');
            $table->unsignedSmallInteger('sugars');
            $table->unsignedSmallInteger('added_sugars');
            $table->unsignedSmallInteger('protein');
            $table->unsignedSmallInteger('sodium');
            $table->unsignedSmallInteger('potassium');
            $table->unsignedSmallInteger('calcium');
            $table->unsignedSmallInteger('iron');   
            $table->json('vitamins');
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nutrients');
    }
}
