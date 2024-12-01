@extends('layouts.app')

@section('content')

<section>
     <!-- dico di recuperarmi un solo elemento e quali dati di quel elemento stampare in pagina -->
     <div class="d-flex">
        <div class="me-3"> Id: {{$edible->id}}</div>
        <div class="me-3">nome prodotto: {{$edible->product_name}}</div>
        <div class="me-3">marca: {{$edible->brand_name}}</div>
        <div class="me-3">peso: {{$edible->weight}}</div>
        <div class="me-3">prezzo: {{$edible->price}}</div>
        <div class="me-3">Kcal: {{$edible->kcal}}</div>
        <div class="me-3">grassi: {{$edible->fats}}</div>
        <div class="me-3">di cui saturi: {{$edible->of_witch_satured}}</div>
        <div class="me-3">carboideati: {{$edible->carbohydrates}}</div>
        <div class="me-3">zuccheri: {{$edible->sugars}}</div>
        <div class="me-3">proteine: {{$edible->proteins}}</div>
        <div class="me-3">sali: {{$edible->salts}}</div>
        <div class="me-3">calcio: {{$edible->calcium}}</div>
        <div class="me-3">colesterolo: {{$edible->colesterole}}</div>
        <div class="me-3">note: {{$edible->notes}}</div>
        <div>categoria di appartenenza: {{$edible->category_id}}</div>
    </div>
</section>

@endsection