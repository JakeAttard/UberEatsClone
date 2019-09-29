@extends('layouts.app')

@section('title')
    Orders Index
@endsection

@section('content')

    <div class="container" style="border:1px solid #cecece; padding-top: 20px; margin-top: 20px; text-align: center;">
        @forelse ($orders as $order)
            <div class="card" style="width: 18rem; display:inline-block; margin-right: 10px; margin-top: 20px;">
                <img class="card-img-top" src="{{asset('images/mcdonalds.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Product Name: {{ $order->product}}</p>
                    <p class="card-text">Order Price: {{ $order->price}}</p>
                    <p class="card-text">Order Name :  {{ $order->user }}</p>
                    <p class="card-text">Order Address : {{ $order->address }}</p>
                    <p class="card-text">Order Date Time : {{$order ->time }}</p>
                    @empty
                        <p>Your restaurant currently has no orders. Please try again later!</p>
                </div>
            </div>
        @endforelse
    </div>

@endsection('content')