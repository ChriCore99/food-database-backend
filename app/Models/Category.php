<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // inserisco la relazione 1 molti fra questo model e il model "Edible"
    public function edibles(){
        return $this->hasMany(Edible::class);
    }
}
