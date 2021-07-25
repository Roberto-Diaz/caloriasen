<?php

namespace Database\Seeders;

use App\Models\Objetive;
use Illuminate\Database\Seeder;

class ObjetiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Objetive::create([
            'name'  => "Subir masa muscular",
            'status'    => 1
        ]); 
        Objetive::create([
            'name'  => "Definición",
            'status'    => 1
        ]); 
        Objetive::create([  
            'name'  => "Mantenimiento",
            'status'    => 1
        ]);
    }
}
