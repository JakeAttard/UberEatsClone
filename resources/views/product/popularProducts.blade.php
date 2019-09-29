@extends('layouts.app')

@section('title')
    Most Popular
@endsection('title')

@section('content')
    <div class="documentationTitle">
        <h3>Popular Dishes</h3>
    </div>

    <div class="container" style="border:1px solid #cecece; padding-top: 20px; margin-top: 20px; text-align: center;">
        <h2 style="">{{$restaurant->name}}</h2>
        <p>{{$restaurant->address}}</p>

        <div class="col-xl" style="padding-top: 20px; padding-bottom: 20px;">
            @forelse($products as $product)
                <div class="card" style="width: 18rem; display:inline-block; margin-right: 10px; margin-top: 20px;">
                    <img class="card-img-top" src="{{ asset($product->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ url('/restaurant/'.$restaurant['id']) }}">{{$restaurant ->name}}</a></h5>
                        <p class="card-text">Dish Name : {{$product->name}}</p>
                        <p class="card-text">Price : {{$product -> price}}</p>
                    </div>
                </div>
            @endforelse
        </div>
@endsection('content')