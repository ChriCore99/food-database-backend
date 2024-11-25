@extends('layouts.app')

@section('content')

    <section>
        <!-- dico di recuperarmi un solo elemento e quali dati di quel elemento stampare in pagina -->
        <div class="d-flex">
            <div class="me-3"> Id: {{$category->id}}</div>
            <div>Tipologia di cibo: {{$category->food_typology}}</div>
        </div>
    </section>

@endsection