<?php

namespace Database\Seeders;

use App\Models\Supplement;
use Illuminate\Database\Seeder;

class SupplementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplement::create([
            'brand_id'      => 4,
            'name'          => 'creatina',
            'description'   => "Ayuda a dar mas fuerza",            
        ]);
        Supplement::create([
            'brand_id'      => 4,
            'name'          => 'proteina',
            'description'   => "Contrucción de musculo",            
        ]);
        Supplement::create([
            'brand_id'      => 4,
            'name'          => 'oxido',
            'description'   => "Mejor circulacion de la sangre",            
        ]);     
    }
}
