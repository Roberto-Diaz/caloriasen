<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' => 'Sistema de equivalentes',
            'status' => '1',
        ]);
        Brand::create([
            'name' => 'Bimbo',
            'status' => '1',
        ]); 
        Brand::create([
            'name' => 'Skips',
            'status' => '1',
        ]);
    }
}
