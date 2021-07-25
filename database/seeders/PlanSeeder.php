<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\PlanDiet;
use App\Models\PlanRoutine;
use App\Models\PlanSupplement;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1 = Plan::create([
            'user_id'       => 1,
            'objetive_id'   => 1,   
            'activity_id'   => 3,
            'name'          => "Ganar masa muscular", //corregir con objetivo
            'sex'           => 'Hombre',
            'age'           => 28,
            'height'        => '1.74',
            'weight'        => '74.5',  
            'bmi'           => '18.5',
            'kcal'           => '2000', 
            'protein'       => '117.0',
            'carbohydrate'  => '234.0',
            'fat'           => '52.0',  
            'fiber'         => '22.0',
            'date_start'    => Carbon::now(),       
            'date_end'      => Carbon::now()->addMonth(2),
            'meals'         => 4,
            'workout_days'  => 5,
            'workout_weeks' => 8,   
            'status'        => 1,
        ]); 
        PlanRoutine::create([
            'plan_id'       => $p1->id,
            'routine_id'    => 1,
            'status'        => 1,
            'week'          => 1,
            'day'           => 1,
            'date'          => Carbon::now()->addDay(1),
        ]);
        PlanRoutine::create([
            'plan_id'       => $p1->id,
            'routine_id'    => 1,
            'status'        => 1,
            'week'          => 1,
            'day'           => 2,
            'date'          => Carbon::now()->addDay(2),
        ]);
        PlanSupplement::create([
            'plan_id'       => $p1->id,
            'supplement_id' => 1,
            'description'   =>  "Tomar cada lunes 2 capsulas",  
        ]);
        PlanSupplement::create([
            'plan_id'       => $p1->id,
            'supplement_id' => 2,
            'description'   =>  "Un scoop de proteina diario",  
        ]);
        PlanDiet::create([
            'plan_id'   => $p1->id,
            'diet_id'   => 1,
            'date_start'    => Carbon::now(),
            'date_end'      => Carbon::now()->addMonth(2),
            'status'        => 1
        ]);

        $p2 = Plan::create([
            'user_id'       => 1,
            'objetive_id'   => 2,
            'activity_id'   => 2,
            'name'          => "perder grasa", //corregir con objetivo
            'sex'           => 'Hombre',
            'age'           => 28,
            'height'        => '1.74',
            'weight'        => '74.5',                       
            'bmi'           => '18.5',  
            'kcal'      => '2000',  
            'protein'       => '117.0',
            'carbohydrate'  => '234.0',
            'fat'           => '52.0',  
            'fiber'         => '22.0',
            'date_start'    => Carbon::now(),       
            'date_end'      => Carbon::now()->addMonth(2),
            'meals'         => 4,
            'workout_days'  => 5,
            'workout_weeks' => 8,   
            'status'        => 1,
        ]);

        PlanRoutine::create([
            'plan_id'       => $p2->id,
            'routine_id'    => 2,
            'status'        => 1,
            'week'          => 1,
            'day'           => 1,
            'date'          => Carbon::now()->addDay(1),
        ]);
        PlanRoutine::create([   
            'plan_id'       => $p2->id, 
            'routine_id'    => 2,
            'status'        => 1,
            'week'          => 1,
            'day'           => 2,
            'date'          => Carbon::now()->addDay(2),
        ]);

        PlanSupplement::create([    
            'plan_id'       => $p2->id,
            'supplement_id' => 3,
            'description'   =>  "Tomar un scoop antes de entrenar",  
        ]);
        PlanSupplement::create([    
            'plan_id'       => $p2->id,
            'supplement_id' => 2,
            'description'   =>  "Un scoop de proteina diario",  
        ]); 
        PlanDiet::create([
            'plan_id'   => $p2->id,
            'diet_id'   => 2,
            'date_start'    => Carbon::now(),
            'date_end'      => Carbon::now()->addMonth(2),
            'status'        => 1
        ]);
    }
}
