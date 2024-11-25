<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// importo il model di categories
use App\Models\Edible;

class EdibleController extends Controller
{
    // funzione di index
    public function index(){

        $edibles = Edible::all();

        return view('admin.edibles.index', compact('edibles'));
    }

    // funzione cestino

    // funzione di show in cui dico di recuperare dal model collegato il tot elemento (solitamente tramite l'id) dalla tabella corrispondente
    public function show(Edible $edible) {
        return view('admin.edibles.show', compact('edible'));
    }

    // funzione create
    public function create() {
        return view('admin.edibles.create');
    }

    // funzione store
    public function store(Request $request) {

        // inserisco il codice per la validazione dei dati 
        $request->validate([
            'product_name' => 'required', 
            'brand_name' => 'nullable', 
            'weight' => 'nullable', 
            'price' => 'nullable', 
            'kcal' => 'nullable', 
            'fats' => 'nullable', 
            'of_witch_satured' => 'nullable', 
            'carbohydrates' => 'nullable', 
            'sugars' => 'nullable', 
            'proteins' => 'nullable', 
            'salts' => 'nullable', 
            'calcium' => 'nullable', 
            'colesterole' => 'nullable', 
            'notes' => 'nullable'
        ]);

        // recupero i dati dalla richiesta
        $form_data = $request->all();

        // dico di creare nel db un nuovo record prendendi i dati per la creazione da $form_data
        $new_edible = Edible::create($form_data);

        // dico una volta creato il record di ridirigerlo alla show
        return to_route('admin.edibles.show', $new_edible);
    }

    // funzione edit
    public function edit(Edible $edible) {

        return view('admin.edibles.edit', compact('edible'));
    }

    // funzione update
    public function update(Request $request, Edible $edible) {

        // inserisco il codice per la validazione dei dati 
        $request->validate([
            'product_name' => 'required', 
            'brand_name' => 'nullable', 
            'weight' => 'nullable', 
            'price' => 'nullable', 
            'kcal' => 'nullable', 
            'fats' => 'nullable', 
            'of_witch_satured' => 'nullable', 
            'carbohydrates' => 'nullable', 
            'sugars' => 'nullable', 
            'proteins' => 'nullable', 
            'salts' => 'nullable', 
            'calcium' => 'nullable', 
            'colesterole' => 'nullable', 
            'notes' => 'nullable'
        ]);

        // recupero i dati dalla richiesta
        $form_data = $request->all();

        // faccio un update dei dati modificati
        $edible->update($form_data);

        // dico una volta creato il record di ridirigerlo alla show
        return to_route('admin.edibles.show', $edible);

    }

    // funzione delete
    public function destroy(Edible $edible) {

        // 
        $edible->delete();

        // dico di ridirigermi alla index
        return to_route('admin.edibles.index');
    }

    // funzione per ricerca testuale

    // funzione per il ripristino

    // funzione per forzare l'eliminazione

}
