<?php

namespace Database\Seeders;

use App\Models\Muscle;
use Illuminate\Database\Seeder;

class MuscleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Muscle::create([
            'name' => "Biset"
        ]);
        Muscle::create([
            'name' => "Hombro"
        ]);
        Muscle::create([
            'name' => "cuadriset"
        ]);     
    }
}
