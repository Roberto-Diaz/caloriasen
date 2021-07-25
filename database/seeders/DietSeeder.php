<?php

namespace Database\Seeders;

use App\Models\Diet;
use App\Models\Dietable;
use App\Models\Food;
use Illuminate\Database\Seeder; 

class DietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $d1 = Diet::create([
            'user_id'   => 1,
            'name'      => "Dieta poderosa",
            'slug'      => "dieta-poderosa",
            'meals'     => 2,
            'status'    => 1,            
        ]); 
        Dietable::create([
            'diet_id'       => $d1->id,
            'dietable_id'   => 1,
            'dietable_type' => Food::class,
            'meal'          => 1,
        ]);
        Dietable::create([
            'diet_id'       => $d1->id,
            'dietable_id'   => 2,
            'dietable_type' => Food::class,
            'meal'          => 2,
        ]);

        $d2 = Diet::create([
            'user_id'   => 1,
            'name'      => "Dieta poderosa 2",
            'slug'      => "dieta-poderosa-2",
            'meals'     => 5,
            'status'    => 1,            
        ]);         

        Dietable::create([
            'dietable_id'   => 1,
            'dietable_type' => Food::class,
            'diet_id'       => $d2->id,
            'meal'          => 1,
        ]);
        Dietable::create([
            'dietable_id'   => 2,
            'dietable_type' => Food::class,
            'diet_id'       => $d2->id,
            'meal'          => 2,
        ]);

        $d3 = Diet::create([
            'user_id'   => 1,
            'name'      => "Dieta poderosa 3",
            'slug'      => "dieta-poderosa-3",      
            'meals'     => 5,
            'status'    => 1,            
        ]);

        Dietable::create([
            'dietable_id'   => 1,
            'dietable_type' => Food::class,
            'diet_id'       => $d3->id,
            'meal'          => 1,
        ]);
        Dietable::create([
            'dietable_id'   => 2,
            'dietable_type' => Food::class,
            'diet_id'       => $d3->id,
            'meal'          => 2,
        ]);                 

    }
}
