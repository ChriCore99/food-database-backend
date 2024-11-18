<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// importo il model della tabella di riferimento
use App\Models\Category;
// importo poi il faker e le sue dipendenze per poterlo usare 
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    // inserisco il metodo del faker nella funzione "run" per usarlo
    public function run(Faker $faker): void
    {
        // creo un array con le varie categorie di cibi
        $food_categories = [
            'cereals and their products',
            'fresh meats', 
            'processed and preserved meats',
            'offal',
            'fishy products',
            'cheeses',
            'eggs',
            'oils and fats',
            'other products'
        ];

        // creo un ciclo for per scorrere tutte le categorie 
        for($i = 0; $i < 9; $i++){

            // creo l'istanza del model "category"
            $new_category = new Category();

            // popoliamo la colonna "food_typology" della tabella "categories" coi dati presi una sola volta (grazie al metodo "unique") dall'array "food_categories"
            $new_category->food_typology = $faker->unique()->randomElement($food_categories);

            // salviamo i dati generati
            $new_category->save();
        }
    }
}