@extends('layouts.app')

@section('content')

    <section class="">
        @foreach($recepies as $recipe)
            <ul>
                <li class="d-flex">
                    <div class="me-3"> Id: {{$recipe->id}}</div>
                    <div class="me-3">nome riceta: {{$recipe->recipe_name}}</div>
                    <div>note personali: {{$recipe->personal_notes}}</div>
                </li>
            </ul>
        @endforeach
    </section>

@endsection