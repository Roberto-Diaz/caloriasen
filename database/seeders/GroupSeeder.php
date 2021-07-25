<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            'parent_id' => 0,
            'name' => 'Sistema de equivalentes',
        ]);

        Group::create([
            'parent_id' => 1,
            'name' => 'Verduras',
        ]);

        Group::create([
            'parent_id' => 1,
            'name' => 'Frutas',
        ]);        

        $cereales = Group::create([
            'parent_id' => 1,
            'name' => 'Cereales y tubérculos',
        ]);        

        Group::create([
            'parent_id' => 1,
            'name' => 'Leguminosas',
        ]);
        
        $animal = Group::create([
            'parent_id' => 1,
            'name' => 'Alimento de origen animal',
        ]);
        
        $leche = Group::create([
            'parent_id' => 1,
            'name' => 'Leche',
        ]);
        
        $aceite = Group::create([
            'parent_id' => 1,
            'name' => 'Aceite y grasas',
        ]);
        
        $azucar = Group::create([
            'parent_id' => 1,
            'name' => 'Azúcares',
        ]);

        
        Group::create([
            'parent_id' => 1,
            'name' => 'Bebidas alcohólicas',
        ]);

        
        Group::create([
            'parent_id' => 1,
            'name' => 'Alimentos libres en energia',
        ]);
        
        Group::create([
            'parent_id' => 1,
            'name' => 'Frutas',
        ]);

        Group::create([
            'parent_id' => $cereales->id,
            'name' => 'Sin grasa',
        ]);

        Group::create([
            'parent_id' => $cereales->id,
            'name' => 'Con grasa',
        ]);

        Group::create([
            'parent_id' => $animal->id,
            'name' => 'Muy bajo aporte de grasa',
        ]);
        Group::create([
            'parent_id' => $animal->id,
            'name' => 'bajo aporte de grasa',
        ]);

        Group::create([
            'parent_id' => $animal->id,
            'name' => 'Moderado aporte de grasa',
        ]);
        Group::create([
            'parent_id' => $animal->id,
            'name' => 'Alto aporte de grasa',
        ]);

        Group::create([
            'parent_id' => $leche->id,
            'name' => 'Descremada',
        ]);
        Group::create([
            'parent_id' => $leche->id,
            'name' => 'Semidescremada',
        ]);
        Group::create([
            'parent_id' => $leche->id,
            'name' => 'Entera',
        ]);
        Group::create([
            'parent_id' => $leche->id,
            'name' => 'Con azúcar',
        ]);

        Group::create([
            'parent_id' => $aceite->id,
            'name' => 'Sin proteina',
        ]);
        Group::create([
            'parent_id' => $aceite->id,
            'name' => 'Con proteina',
        ]);
        Group::create([
            'parent_id' => $azucar->id,
            'name' => 'Sin grasa',
        ]);
        Group::create([
            'parent_id' => $azucar->id,
            'name' => 'Con grasa',
        ]); 

    }
}
