<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// 
use App\Models\Recipe;

class RecipeController extends Controller
{
     // funzione di index
     public function index(){

        $recepies = Recipe::all();

        return view('admin.recepies.index', compact('recepies'));
    }

    // funzione di show in cui dico di recuperare dal model collegato il tot elemento (solitamente tramite l'id) dalla tabella corrispondente
    public function show(Recipe $recipe) {
        return view('admin.recepies.show', compact('recipe'));
    }

    // funzione create
    public function create() {
        return view('admin.recepies.create');
    }

    // funzione store
    public function store(Request $request) {

        // recupero i dati dalla richiesta
        $form_data = $request->all();

        // dico di creare nel db un nuovo record prendendi i dati per la creazione da $form_data
        $new_recipe = Recipe::create($form_data);

        // dico una volta creato il record di ridirigerlo alla show
        return to_route('admin.recepies.show', $new_recipe);
    }

    // funzione edit
    public function edit(Recipe $recipe) {
        // resources/views/names/edit.blade.php
        return view('admin.recepies.edit', compact('recipe'));
    }

    // funzione update
    public function update(Request $request, Recipe $recipe) {

        // recupero i dati dalla richiesta
        $form_data = $request->all();

        // faccio un update dei dati modificati
        $recipe->update($form_data);

        // dico una volta creato il record di ridirigerlo alla show
        return to_route('admin.recepies.show', $recipe);

    }

    // funzione destroi
    public function destroy(Recipe $recipe) {

        // 
        $recipe->delete();

        // dico di ridirigermi alla index
        return to_route('admin.recepies.index');
    }
}
