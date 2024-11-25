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

    // con questa dictura dico a laravel a quale tabella fare riferimento nel DB
    protected $table = 'recepies';

    // dico quali parametri sono riconosciuti e possono essere passati nella EDIT altrimenti darà errore in fase di creazione/modifica
    protected $fillable = [
        'recipe_name', 'personal_notes'
    ];
}
