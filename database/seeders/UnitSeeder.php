<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create([
            'name' => 'G',  
            'status' => '1',
        ]);   
        Unit::create([
            'name' => 'Onza',
            'status' => '1',
        ]); 
        Unit::create([
            'name' => 'Taza',
            'status' => '1',
        ]);   
        Unit::create([
            'name' => 'Pieza',
            'status' => '1',
        ]);   
        Unit::create([
            'name' => 'Cucharada',
            'status' => '1',
        ]);   
        Unit::create([
            'name' => 'Cucharadita',
            'status' => '1',
        ]);   
        Unit::create([
            'name' => 'Scoop',
            'status' => '1',
        ]);   
        Unit::create([
            'name' => 'Rebanada',   
            'status' => '1',
        ]);   
    }   
}
