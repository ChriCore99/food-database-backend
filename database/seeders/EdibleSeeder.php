<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// importo il model della tabella di riferimento
use App\Models\Edible;
// importo poi il faker e le sue dipendenze per poterlo usare 
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class EdibleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // creo un array con le varie categorie di cibi
        $edible_names = [
            'cornflakes',
            'lupini',
            'aglio', 
            'anacardi',
            'gallina',
            'bresaola',
            'hamburgher',
            'trippa',
            'cozza',
            'yogurt',
            'caciocavallo',
            'uovo',
            'burro',
            'cannoli',
            'aranciata'
        ];

        // creo un ciclo for per scorrere tutti gli edibili 
        for($i = 0; $i < 15; $i++){

            // creo l'istanza del model "unedible"
            $new_edible = new Edible();

            // popoliamo la colonna "food_typology" della tabella "categories" coi dati presi una sola volta (grazie al metodo "unique") dall'array "food_categories"
            $new_edible->product_name = $faker->unique()->randomElement($edible_names);

            // dico che, quando il nome dell'alimento è uguale a questo il resto dei dati sarà quello scritto sotto
            if($new_edible->product_name === 'cornflakes'){

                // dico quante Kcal avrà questo alimento
                $new_edible->kcal = 1;
                // dico quanti grassi avrà questo alimento
                $new_edible->fats = 1;
                // quanti di quei grassi saranno saturi in questo alimento
                $new_edible->of_witch_satured = 1;
                // dico quanti carboidrati avrà questo alimento
                $new_edible->carbohydrates = 1;
                // dico quanti zuccheri avrà questo alimento
                $new_edible->sugars = 1;
                // dico quante proteine avrà questo alimento
                $new_edible->proteins = 1;
                // dico quanti sali avrà questo alimento
                $new_edible->salts = 1;
                // dico quanto calcio avrà questo alimento
                $new_edible->calcium = 1;
                // dico quanto colesterolo avrà questo alimento
                $new_edible->colesterole = 1;
                // dico a quale categoria appartiene questo alimento
                $new_edible->category_id = 1;

            } 
            // dico che, quando il nome dell'alimento è uguale a questo il resto dei dati sarà quello scritto sotto
            else if ($new_edible->product_name === 'lupini'){

                $new_edible->kcal = 2;
                $new_edible->fats = 2;
                $new_edible->of_witch_satured = 2;
                $new_edible->carbohydrates = 2;
                $new_edible->sugars = 2;
                $new_edible->proteins = 2;
                $new_edible->salts = 2;
                $new_edible->calcium = 2;
                $new_edible->colesterole = 2;
                $new_edible->category_id = 2;

            } 
            // dico che, quando il nome dell'alimento è uguale a questo il resto dei dati sarà quello scritto sotto
            else if ($new_edible->product_name === 'aglio'){

                $new_edible->kcal = 3;
                $new_edible->fats = 3;
                $new_edible->of_witch_satured = 3;
                $new_edible->carbohydrates = 3;
                $new_edible->sugars = 3;
                $new_edible->proteins = 3;
                $new_edible->salts = 3;
                $new_edible->calcium = 3;
                $new_edible->colesterole = 3;
                $new_edible->category_id = 3;

            } 
            // dico che, quando il nome dell'alimento è uguale a questo il resto dei dati sarà quello scritto sotto
            else if ($new_edible->product_name === 'anacardi'){

                $new_edible->kcal = 4;
                $new_edible->fats = 4;
                $new_edible->of_witch_satured = 4;
                $new_edible->carbohydrates = 4;
                $new_edible->sugars = 4;
                $new_edible->proteins = 4;
                $new_edible->salts = 4;
                $new_edible->calcium = 4;
                $new_edible->colesterole = 4;
                $new_edible->category_id = 4;

            } 
            // dico che, quando il nome dell'alimento è uguale a questo il resto dei dati sarà quello scritto sotto
            else if ($new_edible->product_name === 'gallina'){

                $new_edible->kcal = 5;
                $new_edible->fats = 5;
                $new_edible->of_witch_satured = 5;
                $new_edible->carbohydrates = 5;
                $new_edible->sugars = 5;
                $new_edible->proteins = 5;
                $new_edible->salts = 5;
                $new_edible->calcium = 5;
                $new_edible->colesterole = 5;
                $new_edible->category_id = 5;

            } 
            // dico che, quando il nome dell'alimento è uguale a questo il resto dei dati sarà quello scritto sotto
            else if ($new_edible->product_name === 'bresaola'){

                $new_edible->kcal = 6;
                $new_edible->fats = 6;
                $new_edible->of_witch_satured = 6;
                $new_edible->carbohydrates = 6;
                $new_edible->sugars = 6;
                $new_edible->proteins = 6;
                $new_edible->salts = 6;
                $new_edible->calcium = 6;
                $new_edible->colesterole = 6;
                $new_edible->category_id = 6;

            } 
            // dico che, quando il nome dell'alimento è uguale a questo il resto dei dati sarà quello scritto sotto
            else if ($new_edible->product_name === 'hamburgher'){

                $new_edible->kcal = 7;
                $new_edible->fats = 7;
                $new_edible->of_witch_satured = 7;
                $new_edible->carbohydrates = 7;
                $new_edible->sugars = 7;
                $new_edible->proteins = 7;
                $new_edible->salts = 7;
                $new_edible->calcium = 7;
                $new_edible->colesterole = 7;
                $new_edible->category_id = 7;

            } 
            // dico che, quando il nome dell'alimento è uguale a questo il resto dei dati sarà quello scritto sotto
            else if ($new_edible->product_name === 'trippa'){

                $new_edible->kcal = 8;
                $new_edible->fats = 8;
                $new_edible->of_witch_satured = 8;
                $new_edible->carbohydrates = 8;
                $new_edible->sugars = 8;
                $new_edible->proteins = 8;
                $new_edible->salts = 8;
                $new_edible->calcium = 8;
                $new_edible->colesterole = 8;
                $new_edible->category_id = 8;

            } 
            // dico che, quando il nome dell'alimento è uguale a questo il resto dei dati sarà quello scritto sotto
            else if ($new_edible->product_name === 'cozza'){

                $new_edible->kcal = 9;
                $new_edible->fats = 9;
                $new_edible->of_witch_satured = 9;
                $new_edible->carbohydrates = 9;
                $new_edible->sugars = 9;
                $new_edible->proteins = 9;
                $new_edible->salts = 9;
                $new_edible->calcium = 9;
                $new_edible->colesterole = 9;
                $new_edible->category_id = 9;

            } 
            // dico che, quando il nome dell'alimento è uguale a questo il resto dei dati sarà quello scritto sotto
            else if ($new_edible->product_name === 'yogurt'){

                $new_edible->kcal = 10;
                $new_edible->fats = 10;
                $new_edible->of_witch_satured = 10;
                $new_edible->carbohydrates = 10;
                $new_edible->sugars = 10;
                $new_edible->proteins = 10;
                $new_edible->salts = 10;
                $new_edible->calcium = 10;
                $new_edible->colesterole = 10;
                $new_edible->category_id = 10;

            } 
            // dico che, quando il nome dell'alimento è uguale a questo il resto dei dati sarà quello scritto sotto
            else if ($new_edible->product_name === 'caciocavallo'){

                $new_edible->kcal = 11;
                $new_edible->fats = 11;
                $new_edible->of_witch_satured = 11;
                $new_edible->carbohydrates = 11;
                $new_edible->sugars = 11;
                $new_edible->proteins = 11;
                $new_edible->salts = 11;
                $new_edible->calcium = 11;
                $new_edible->colesterole = 11;
                $new_edible->category_id = 11;

            } 
            // dico che, quando il nome dell'alimento è uguale a questo il resto dei dati sarà quello scritto sotto
            else if ($new_edible->product_name === 'uovo'){

                $new_edible->kcal = 12;
                $new_edible->fats = 12;
                $new_edible->of_witch_satured = 12;
                $new_edible->carbohydrates = 12;
                $new_edible->sugars = 12;
                $new_edible->proteins = 12;
                $new_edible->salts = 12;
                $new_edible->calcium = 12;
                $new_edible->colesterole = 12;
                $new_edible->category_id = 12;

            } 
            // dico che, quando il nome dell'alimento è uguale a questo il resto dei dati sarà quello scritto sotto
            else if ($new_edible->product_name === 'burro'){

                $new_edible->kcal = 13;
                $new_edible->fats = 13;
                $new_edible->of_witch_satured = 13;
                $new_edible->carbohydrates = 13;
                $new_edible->sugars = 13;
                $new_edible->proteins = 13;
                $new_edible->salts = 13;
                $new_edible->calcium = 13;
                $new_edible->colesterole = 13;
                $new_edible->category_id = 13;

            } 
            // dico che, quando il nome dell'alimento è uguale a questo il resto dei dati sarà quello scritto sotto
            else if ($new_edible->product_name === 'cannoli'){

                $new_edible->kcal = 14;
                $new_edible->fats = 14;
                $new_edible->of_witch_satured = 14;
                $new_edible->carbohydrates = 14;
                $new_edible->sugars = 14;
                $new_edible->proteins = 14;
                $new_edible->salts = 14;
                $new_edible->calcium = 14;
                $new_edible->colesterole = 14;
                $new_edible->category_id = 14;

            } 
            // dico che, quando il nome dell'alimento è uguale a questo il resto dei dati sarà quello scritto sotto
            else if ($new_edible->product_name === 'aranciata'){

                $new_edible->kcal = 15;
                $new_edible->fats = 15;
                $new_edible->of_witch_satured = 15;
                $new_edible->carbohydrates = 15;
                $new_edible->sugars = 15;
                $new_edible->proteins = 15;
                $new_edible->salts = 15;
                $new_edible->calcium = 15;
                $new_edible->colesterole = 15;
                $new_edible->category_id = 15;

            }


            // salviamo i dati generati
            $new_edible->save();
        }
    }
}
