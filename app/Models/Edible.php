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

    // dico quali parametri sono riconosciuti e possono essere passati nella EDIT altrimenti darà errore in fase di creazione/modifica
    protected $fillable = [
        'product_name', 
        'brand_name', 
        'weight', 
        'price', 
        'kcal', 
        'fats', 
        'of_witch_satured', 
        'carbohydrates', 
        'sugars', 
        'proteins', 
        'salts', 
        'calcium', 
        'colesterole', 
        'notes'
    ];
}
