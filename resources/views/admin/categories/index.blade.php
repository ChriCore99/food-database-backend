@extends('layouts.app')

@section('content')

    <section class="">
        @foreach($categories as $category)
            <ul>
                <li class="d-flex">
                    <div class="me-3"> Id: {{$category->id}}</div>
                    <div>Tipologia di cibo: {{$category->food_typology}}</div>
                </li>
            </ul>
        @endforeach
    </section>

@endsection