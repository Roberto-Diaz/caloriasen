<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => "Roberto Diaz Diaz",
            'email' => "robertodd07@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),    
        ]);   
        
        
        $invited = User::create([
            'name' => "Invitado",
            'email' => "rober_diaz7@hotmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),    
        ]);

        $admin->roles()->sync([1]);     
        $invited->roles()->sync([2]);          
    }
}
