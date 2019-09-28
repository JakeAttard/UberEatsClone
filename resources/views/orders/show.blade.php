@extends('layouts.app')

@section('title')
    Orders Show
@endsection('title')

@section('content')

    <div class="container" style="border:1px solid #cecece; padding-top: 20px; margin-top: 20px; text-align: center;">
        <div class="col-xl" style="padding-top: 20px; padding-bottom: 20px;">
            <div class="alert alert-success" role="alert">
                Your purchase has been successful! Here is your order details.
            </div>
            @if ($order)
                <div class="card" style="width: 18rem; display:inline-block; margin-right: 10px; margin-top: 20px;">
                    <img class="card-img-top" src="{{asset('images/mcdonalds.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Product Name: {{ $order->product}}</p>
                        <p class="card-text">Order Price: {{ $order->price}}</p>
                        <p class="card-text">Order Name :  {{ $order->user }}</p>
                        <p class="card-text">Order Address : {{ $order->address }}</p>
                        <p class="card-text">Order Date Time : {{$order ->time }}</p>
                    </div>
                </div>
            @else
                    <p>Error no invalid order id. Please try again!</p>
            @endif
        </div>

@endsection('content')