<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exercise::create([
            'name'  => "Press de pecho",
            'slug'  => Str::slug("Press de pecho")
        ]);
        Exercise::create([
            'name' => "Press militar",
            'slug'  => Str::slug("Press militar")
        ]); 
        Exercise::create([
            'name' => "Sentadilla", 
            'slug'  => Str::slug("Sentadilla") 
        ]);
    }
}
