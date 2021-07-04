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
            $table->string('suggestion');   
            $table->decimal('g',5,1);   
            $table->decimal('kcal',5,1);
            $table->decimal('kj',6,1)->nullable();
            $table->decimal('total_fat',5,1);   
            $table->decimal('trans_fat',4,1);
            $table->decimal('saturated_fat',4,1);
            $table->decimal('cholesterol',4,1);
            $table->decimal('carbohydrate',5,1);
            $table->decimal('fiber',5,1);
            $table->decimal('sugars',4,1);
            $table->decimal('added_sugars',4,1);
            $table->decimal('protein',5,1);
            $table->decimal('sodium',5,1);
            $table->decimal('potassium',5,1);
            $table->decimal('calcium',5,1);
            $table->decimal('iron',5,1);        
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
