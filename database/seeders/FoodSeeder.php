<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\Nutrient;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {                                                                                                                          
        //Verduras 2
        $v = new Food;
        $v->brand_id = 1;
        $v->group_id = 2;
        $v->name = 'Acelga Cruda';
        $v->slug = Str::slug($v->name);
        $v->status = 1;
        $v->save();
        Nutrient::create([
            'nutrientable_id'   => $v->id,
            'nutrientable_type' => Food::class,
            'unit_id'       => 3,  
            'suggestion'    => '2',
            'g'             => '98',
            'kcal'          => '22',
            'kj'            => '90',    
            'protein'       => '2.2',
            'total_fat'     => '0.1',
            'trans_fat'     => '0',
            'saturated_fat' => '0',      
            'cholesterol'   => '0',
            'carbohydrate'  => '4.3',
            'fiver'         => '3.6',
            'sugars'        => '0',
            'added_sugars'  => '0',
            'sodium'        => '0',
            'potassium'     => '749.8',
            'calcium'       => '0',   
            'iron'          => '2.5',   
            'vitamins'      => '{"a":"310.9","b":"14.8","c":"29.5","ig":"64.0","cg":"2.7"}',    
        ]);

        $v = new Food;
        $v->brand_id = 1;
        $v->group_id = 2;
        $v->name = 'Acelga picada cocida';  
        $v->slug = Str::slug($v->name);
        $v->status = 1;
        $v->save(); 

        Nutrient::create([  
            'nutrientable_id'   => $v->id,
            'nutrientable_type' => Food::class,
            'unit_id'       => 3,  
            'suggestion'    => '1/2',
            'g'             => '72',
            'kcal'          => '19',
            'kj'            => '81',
            'protein'       => '1.9',
            'total_fat'     => '0.1',
            'trans_fat'     => '0',
            'saturated_fat' => '0',      
            'cholesterol'   => '0',
            'carbohydrate'  => '3.9',
            'fiver'         => '2.1',
            'sugars'        => '0',
            'added_sugars'  => '0',
            'sodium'        => '0',
            'potassium'     => '654.5',
            'calcium'       => '0',   
            'iron'          => '1.4',   
            'vitamins'      => '{"a":"275.8","b":"10.1","c":"17.9","ig":"64.0","cg":"2.5"}',    
        ]);
    }
}
