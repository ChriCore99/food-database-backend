@extends('layouts.app')

@section('content')

    <section class="">
        @foreach($edibles as $edible)
            <ul>
                <li class="d-flex">
                    <div class="me-3"> Id: {{$edible->id}}</div>
                    <div class="me-3"> product name: {{$edible->product_name}}</div>
                    <div class="me-3"> brand name: {{$edible->brand_name}}</div>
                    <div class="me-3"> weight: {{$edible->weight}}</div>
                    <div class="me-3"> price: {{$edible->price}}</div>
                    <div class="me-3"> kcal: {{$edible->kcal}}</div>
                    <div class="me-3"> fats: {{$edible->fats}}</div>
                    <div class="me-3"> of_witch_satured: {{$edible->of_witch_satured}}</div>
                    <div class="me-3"> carbohydrates: {{$edible->carbohydrates}}</div>
                    <div class="me-3"> sugars: {{$edible->sugars}}</div>
                    <div class="me-3"> proteins: {{$edible->proteins}}</div>
                    <div class="me-3"> salts: {{$edible->salts}}</div>
                    <div class="me-3"> calcium: {{$edible->calcium}}</div>
                    <div class="me-3"> colesterole: {{$edible->colesterole}}</div>
                    <div>note: {{$edible->notes}}</div>
                </li>
            </ul>
        @endforeach
    </section>

@endsection