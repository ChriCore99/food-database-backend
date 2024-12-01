@extends('layouts.app')

@section('content')

<section>
    <!-- dico di recuperarmi un solo elemento e quali dati di quel elemento stampare in pagina -->
    <div class="d-flex">
        <div class="me-3"> Id: {{$recipe->id}}</div>
        <div class="me-3">nome ricetta: {{$recipe->recipe_name}}</div>
        <div>note: {{$recipe->personal_notes}}</div>
    </div>
</section>

@endsection