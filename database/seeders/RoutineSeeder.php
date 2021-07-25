<?php

namespace Database\Seeders;

use App\Models\ExerciseRoutine;
use App\Models\Routine;
use Illuminate\Database\Seeder;

class RoutineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r1 = Routine::create([
            'user_id' => 1,
            'name'    => "Rutina poderosa"
        ]);
        // $r1->exercises()->attach([1,2,3]);
        ExerciseRoutine::create([
            'exercise_id'   => 1,
            'routine_id'    => $r1->id,
            'reps'          => 8,
            'sets'          => 12,
            'interval'      => 5,
            'weight'        => 20,
            'calorias_burned'   => 100,
            'status'            => 1
        ]); 

        $r1->muscles()->attach([1,2]);
        $r2 = Routine::create([
            'user_id' => 1,
            'name'    => "Rutina roberto"
        ]); 
        // $r2->exercises()->attach([1,2,3]);
        ExerciseRoutine::create([
            'exercise_id'   => 2,
            'routine_id'    => $r2->id,
            'reps'          => 5,
            'sets'          => 5,
            'interval'      => 5,
            'weight'        => 20,
            'calorias_burned'   => 100,
            'status'            => 1
        ]);     
        $r2->muscles()->attach([1,2]);


    }
}
