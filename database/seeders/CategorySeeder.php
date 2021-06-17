<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Dietas',
            'slug' => 'dietas',
        ]);

        Category::create([
            'name' => 'Series de entrenamiento',
            'slug' => 'series-de-entrenamiento'
        ]);     

        Category::create([
            'name' => 'Metodos para calcular calorias',
            'slug' => 'metodos-para-calcular-calorias'
        ]); 

        Category::create([
            'name' => 'Metodos de entrenamiento',
            'slug' => 'metodos-de-entrenamiento'
        ]);     
    }
}
