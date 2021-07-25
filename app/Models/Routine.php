<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    use HasFactory;
    protected $table = "routines";
    protected $guarded = [];    


    public function exercises(){
        return $this->belongsToMany(Exercise::class, 'exercise_routine', 'routine_id', 'exercise_id');
    }
    public function muscles(){
        return $this->belongsToMany(Muscle::class, 'routine_muscle', 'routine_id', 'muscle_id');    
    }   
}
