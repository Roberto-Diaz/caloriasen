<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Administrador',
            'slug' => 'admin'
        ]);
            
        Role::create([
            'name' => 'Invitado',
            'slug' => 'invitado'
        ]);     
    }
}
