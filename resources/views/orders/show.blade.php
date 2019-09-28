@extends('layouts.app')

@section('title')
    Orders Show
@endsection

@section('content')
    <div class="container-fluid w-75">
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
    </div>
@endsection('content')