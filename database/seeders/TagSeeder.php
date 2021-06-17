<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name' => 'Dieta Flexible',
            'slug' => 'dieta-flexible',
        ]);

        Tag::create([
            'name' => 'Ayuno intermitente',
            'slug' => 'ayuno-intermitente',
        ]);

        Tag::create([
            'name' => 'Metodo-bilbo',
            'slug' => 'metodo-bilbo',
        ]);

        Tag::create([
            'name' => 'Metodo 5x5', 
            'slug' => 'metodo-5x5',
        ]);
    }
}
