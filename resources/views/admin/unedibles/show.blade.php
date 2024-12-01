@extends('layouts.app')

@section('content')

<section>
    <!-- dico di recuperarmi un solo elemento e quali dati di quel elemento stampare in pagina -->
    <div class="d-flex">
        <div class="me-3"> Id: {{$unedible->id}}</div>
        <div class="me-3">nome prodotto: {{$unedible->product_name}}</div>
        <div class="me-3">marca: {{$unedible->brand_name}}</div>
        <div class="me-3">prezzo: {{$unedible->price}}</div>
        <div>note: {{$unedible->notes}}</div>
    </div>
</section>

@endsection