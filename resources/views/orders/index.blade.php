@extends('layouts.app')

@section('title')
    Orders Index
@endsection

@section('content')

    <div class="container" style="border:1px solid #cecece; padding-top: 20px; margin-top: 20px; text-align: center;">
            @if (!Auth::guest())
                if (Auth::user()->role == 'restaurant')
                    @forelse ($orders as $order)
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
                    <p>Your restaurant currently has no orders.</p>
                    @endforelse
                @else
                    <p>Error. You need to be a restaurant to view this page!</p>
                @endif
            @else
                <p>Please login to see your restaurant orders.</p>
            @endif
        </div>

@endsection('content')