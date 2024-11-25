@extends('layouts.app')

@section('content')

    <section>
        <!-- dico di puntare alla rotta per salvare i dati (update) e il metodo -->
        <form action="{{route('admin.categories.update', $category)}}" method="POST">

            <!-- aggiungo un tooken di sicurezza per l'invio dei dati -->
            @csrf
            <!-- dico che in realtà il metodo deve essere put -->
            @method('PUT')

            <!-- dico tramite un imput quale dato modificare -->
            <div>
                <label for="food_typology" class="form-label">Inserisci la tipologia di cibi</label>
                <input name="food_typology" type="text" id="food_typology"> 
            </div>

            <button>
                invia dati
            </button>
        </form>
    </section>

@endsection