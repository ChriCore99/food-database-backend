<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// importo il model di categories
use App\Models\Category;

class CategoryController extends Controller
{
    // funzione di index
    public function index(){

        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    // funzione di show in cui dico di recuperare dal model collegato il tot elemento (solitamente tramite l'id) dalla tabella corrispondente
    public function show(Category $category) {
        return view('admin.categories.show', compact('category'));
    }

    // funzione create
    public function create() {
        return view('admin.categories.create');
    }

    // funzione store
    public function store(Request $request) {

        // recupero i dati dalla richiesta
        $form_data = $request->all();

        // dico di creare nel db un nuovo record prendendi i dati per la creazione da $form_data
        $new_category = Category::create($form_data);

        // dico una volta creato il record di ridirigerlo alla show
        return to_route('admin.categories.show', $new_category);
    }

    // funzione edit
    public function edit(Category $category) {
        // resources/views/names/edit.blade.php
        return view('admin.categories.edit', compact('category'));
    }

    // funzione update
    public function update(Request $request, Category $category) {

        // recupero i dati dalla richiesta
        $form_data = $request->all();

        // faccio un update dei dati modificati
        $category->update($form_data);

        // dico una volta creato il record di ridirigerlo alla show
        return to_route('admin.categories.show', $category);

    }

    // funzione destroi
    public function destroy(Category $category) {

        // 
        $category->delete();

        // dico di ridirigermi alla index
        return to_route('admin.categories.index');
    }
}
