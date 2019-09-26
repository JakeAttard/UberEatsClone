@extends('layouts.app')

@section('title')
    Restaurants
@endsection

@section('content')
    <div class="container" style="border:1px solid #cecece; padding-top: 20px; margin-top: 20px; text-align: center;">
        <h2 style="">{{$restaurant->getAttribute('name')}}</h2>
        <p>{{$restaurant->getAttribute('address')}}</p>
    

        <div class="col-xl" style="padding-top: 20px;">
            @forelse($products as $product)
                <div class="card" style="width: 18rem; display:inline-block; margin-right: 10px; margin-top: 20px;">
                    <img class="card-img-top" src="{{asset('images/mcdonalds.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ url('/restaurant/'.$restaurant['id']) }}">{{$restaurant['name']}}</a></h5>
                        <p class="card-text">Dish Name : {{$product['name']}}</p>
                        <p class="card-text">Price : {{$product['price']}}</p>
                    </div>
                </div>
                @if(Auth::user()->id == $product['user_id'])
                    <a href="{{url('/product/'.$product['user_id'].'/edit')}}">edit dish</a>
                    <form method="POST" action="{{ url('product/'.$product['id']) }}">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <input name="rest" type="hidden" value="{{ $product['user_id'] }}">
                        <input type="submit" value="delete" />
                    </form>
                @endif
            @empty
                    <p>No dishes to display</p>
            @endforelse
        </div>

    <!-- @forelse($products as $product)
            <p>Dish Name : {{$product['name']}}</p> 
            <p>Price : {{$product['price']}}</p>
            @if(Auth::user()->id == $product['user_id'])
                <a href="{{url('/product/'.$product['user_id'].'/edit')}}">edit dish</a>
                <form method="POST" action="{{ url('product/'.$product['id']) }}">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input name="rest" type="hidden" value="{{ $product['user_id'] }}">
                    <input type="submit" value="delete" />
                </form>
            @endif
        @empty
            <p>No dishes to display</p>
    @endforelse -->

    {{$products->links()}}

    </div>
@endsection