<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Publicaciones
        $this->call(RoleSeeder::class);      
        $this->call(UserSeeder::class);     
        $this->call(CategorySeeder::class);         
        $this->call(TagSeeder::class); 
        $this->call(PostSeeder::class);
        //Plan de entrenamiento
        $this->call(BrandSeeder::class);
        $this->call(UnitSeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(FoodSeeder::class);
        $this->call(RecipeSeeder::class);
        $this->call(ActivitySeeder::class);
        $this->call(ObjetiveSeeder::class);             
        $this->call(MuscleSeeder::class);
        $this->call(ExerciseSeeder::class);
        $this->call(RoutineSeeder::class);
        $this->call(SupplementSeeder::class);
        $this->call(DietSeeder::class);
        $this->call(PlanSeeder::class);
    }   
}
