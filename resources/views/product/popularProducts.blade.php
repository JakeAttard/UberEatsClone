@extends('layouts.app')

@section('title')
    Most Popular
@endsection('title')

@section('content')
    <div class="documentationTitle">
        <h3>Popular Dishes</h3>
    </div>

    <div class="container" style="border:1px solid #cecece; padding-top: 20px; margin-top: 20px; text-align: center;">
        @forelse ($products as $product)
            <div class="card" style="width: 18rem; display:inline-block; margin-right: 10px; margin-top: 20px;">
                <img class="card-img-top" src="{{asset('images/mcdonalds.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">
                        Product Name: {{ $product->name}}<br>
                        Order Price: {{ $product->price}}<br>
                    </p>
                </div>
            </div>
        @empty
            <p>No orders have been made</p>
        @endforelse
    </div>

@endsection('content')