<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// importo il model della tabella di riferimento
use App\Models\Unedible;
// importo poi il faker e le sue dipendenze per poterlo usare 
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class UnedibleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    // inserisco il metodo del faker nella funzione "run" per usarlo
    public function run(Faker $faker): void
    {
        // creo un array coi nomi di rpodotti non edibili
        $name_product = [
            'shampoo',
            'carta igenica', 
            'spazzolino',
            'dentifricio',
            'tovaglioli',
            'calgon',
            'brillantante',
            'sgrassatore',
            'salviette umidificate'
        ];

        // creo un array coi nomi di marchi di supermercati
        $name_brand = [
            'esselunga',
            'penny marquet', 
            'aldi',
            'coop',
            'eurospin',
            'unes',
            'lidl',
            'carrefour',
            'conad'
        ];

        // creo un ciclo for per generare un tot di non edibili 
        for($i = 0; $i < 9; $i++){

            // creo l'istanza del model "unedible"
            $new_unedible = new Unedible();

            // popoliamo la colonna "product_name" della tabella "unedible" coi dati presi una sola volta (grazie al metodo "unique") dall'array "name_product"
            $new_unedible->product_name = $faker->unique()->randomElement($name_product);

            // popoliamo la colonna "brand_name" della tabella "unedible" coi dati presi una sola volta (grazie al metodo "unique") dall'array "name_brand"
            $new_unedible->brand_name = $faker->unique()->randomElement($name_brand);

            // popoliamo la colonna "price" della tabella "unedible" con dati generati randomicamente col metodo "randomFloat"
            // le cifre inserite in "randomFloat" si riferiscono a (quanti decimali ci sono dopo la virgola, un numero minimo da cui partire, un numero massimo da non superare)
            $new_unedible->price = $faker->randomFloat(2, 7, 20);

            // salviamo i dati generati
            $new_unedible->save();
        }
    }
}
