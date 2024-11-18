<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edible extends Model
{
    use HasFactory;

    // inserisco la relazione 1 a molti fra questo model e il model "Category"
    public function categories(){
        return $this->belongsTo(Category::class);
    }

    // inserisco la relazione molti a molti fra questo model e il model "Recipe"
    public function recepies(){
        return $this->belongsToMany(Recipe::class);
    }
}
