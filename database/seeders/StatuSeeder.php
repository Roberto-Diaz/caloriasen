<?php

namespace Database\Seeders;

use App\Models\Statu;
use Illuminate\Database\Seeder;

class StatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Statu::create([
            'name'  => 'Activo'
        ]);
        Statu::create([
            'name'  => 'Inactivo'
        ]);
        Statu::create([
            'name'  => 'x'
        ]); 
        Statu::create([
            'name'  => 'y'
        ]);
    }
}
