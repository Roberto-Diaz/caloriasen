<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::create([
            'name' => '3 dias/semana de ejercicio',
            'status' => '1',
        ]);

        Activity::create([
            'name' => '4 dias/semana de ejercicio',
            'status' => '1',
        ]);

        Activity::create([
            'name' => '5 dias/semana de ejercicio',
            'status' => '1',
        ]);
        Activity::create([
            'name' => '5 dias/semana de ejercicio intenso',
            'status' => '1',
        ]);
        Activity::create([
            'name' => 'Todos los días hago ejercicio',
            'status' => '1',
        ]);     
    }
}
