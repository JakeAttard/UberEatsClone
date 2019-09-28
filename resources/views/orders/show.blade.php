@extends('layouts.app')

@section('title')
    Orders Show
@endsection('title')

@section('content')
    <!-- <div class="container-fluid w-75">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                @if ($order)
                    <div class="card mb-3">
                        <div class="card-header">{{ $order->product }} - {{ $order->price }}</div>
                        <div class="card-body">
                            <p class="card-text">
                                {{ $order->user }} <br>
                                {{ $order->address }} <br>
                                {{ $order->time }}
                            </p>
                        </div>
                    </div>
                @else
                    <div class="card mb-3">
                        <div class="card-body">
                            <p class="card-text">
                            Invalid order id
                            </p>
                        </div>
                    </div>
                @endif  
            </div>  
        </div>
    </div> -->

    <div class="container" style="border:1px solid #cecece; padding-top: 20px; margin-top: 20px; text-align: center;">
        <div class="col-xl" style="padding-top: 20px; padding-bottom: 20px;">
            @if ($order)
                <div class="card" style="width: 18rem; display:inline-block; margin-right: 10px; margin-top: 20px;">
                    <img class="card-img-top" src="{{asset('images/mcdonalds.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <div class="card-header">{{ $order->product }} - {{ $order->price }}</div>
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