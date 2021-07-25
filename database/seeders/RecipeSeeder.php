<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {      
        $v = new Recipe;
        $v->user_id = 1;
        $v->name = "receta verde";
        $v->slug = Str::slug($v->name);
        $v->directions = 'Mezclar bien todo lo verde';  
        $v->status = 1;
        $v->save();     
        $v->foods()->attach([1,2]); 

        $v = new Recipe;
        $v->user_id = 1;
        $v->name = "receta verde 2";
        $v->slug = Str::slug($v->name);
        $v->directions = 'Mezclar bien todo lo verde';  
        $v->status = 1;
        $v->save();         
        $v->foods()->attach([1,2]); 

    }
}
