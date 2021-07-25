<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $table = "recipes";
    protected $guarded = [];    


    public function foods(){
        return $this->belongsToMany(Food::class, 'food_recipe', 'recipe_id', 'food_id');
    }
    

}
