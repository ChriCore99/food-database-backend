<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    // inserisco la relazione molti a molti fra questo model e il model "Edible"
    public function edibles(){
        return $this->belongsToMany(Edible::class);
    }
}
