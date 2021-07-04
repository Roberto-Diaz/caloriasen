<?php

namespace Database\Seeders;

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
        $r1->exercises()->attach([1,2,3]);
        $r1->muscles()->attach([1,2]);
        $r2 = Routine::create([
            'user_id' => 1,
            'name'    => "Rutina roberto"
        ]); 
        $r2->exercises()->attach([1,2,3]);
        $r2->muscles()->attach([1,2]);


    }
}
