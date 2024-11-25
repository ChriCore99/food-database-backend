<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unedible extends Model
{
    use HasFactory;

    // dico quali parametri sono riconosciuti e possono essere passati nella EDIT altrimenti darà errore in fase di creazione/modifica
    protected $fillable = [
        'product_name', 'brand_name', 'price', 'notes'
    ];
}
