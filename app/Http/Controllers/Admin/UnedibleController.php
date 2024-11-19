<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// 
use App\Models\Unedible;

class UnedibleController extends Controller
{
     // funzione di index
     public function index(){

        $unedibles = Unedible::all();

        return view('admin.unedibles.index', compact('unedibles'));
    }

    // funzione di show in cui dico di recuperare dal model collegato il tot elemento (solitamente tramite l'id) dalla tabella corrispondente
    public function show(Unedible $unedible) {
        return view('admin.unedibles.show', compact('unedible'));
    }

    // funzione create
    public function create() {
        return view('admin.unedibles.create');
    }

    // funzione store
    public function store(Request $request) {

        // recupero i dati dalla richiesta
        $form_data = $request->all();

        // dico di creare nel db un nuovo record prendendi i dati per la creazione da $form_data
        $new_unedible = Unedible::create($form_data);

        // dico una volta creato il record di ridirigerlo alla show
        return to_route('admin.unedibles.show', $new_unedible);
    }

    // funzione edit
    public function edit(Unedible $unedible) {
        // resources/views/names/edit.blade.php
        return view('admin.unedibles.edit', compact('unedible'));
    }

    // funzione update
    public function update(Request $request, Unedible $unedible) {

        // recupero i dati dalla richiesta
        $form_data = $request->all();

        // faccio un update dei dati modificati
        $unedible->update($form_data);

        // dico una volta creato il record di ridirigerlo alla show
        return to_route('admin.unedibles.show', $unedible);

    }

    // funzione destroi
    public function destroy(Unedible $unedible) {

        // 
        $unedible->delete();

        // dico di ridirigermi alla index
        return to_route('admin.unedibles.index');
    }
}
