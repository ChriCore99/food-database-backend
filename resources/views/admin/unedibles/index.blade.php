@extends('layouts.app')

@section('content')

    <section class="">
        @foreach($unedibles as $unedible)
            <ul>
                <li class="d-flex">
                    <div class="me-3"> Id: {{$unedible->id}}</div>
                    <div class="me-3"> product_name: {{$unedible->product_name}}</div>
                    <div class="me-3"> brand_name: {{$unedible->brand_name}}</div>
                    <div class="me-3"> price: {{$unedible->price}}</div>
                    <div>note: {{$unedible->notes}}</div>
                </li>
            </ul>
        @endforeach
    </section>

@endsection