@extends('layouts.app')

@section('title')
    Restaurants
@endsection

@section('content')
    <!-- When User is a guest -->
    @if(Auth::guest())
    <div class="container" style="border:1px solid #cecece; padding-top: 20px; margin-top: 20px; text-align: center;">
        <h2 style="">{{$restaurant->name}}</h2>
        <p>{{$restaurant->address}}</p>

        <div class="col-xl" style="padding-top: 20px; padding-bottom: 20px;">
            @forelse($products as $product)
                <div class="card" style="width: 18rem; display:inline-block; margin-right: 10px; margin-top: 20px;">
                    <img class="card-img-top" src="{{asset('images/mcdonalds.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ url('/restaurant/'.$restaurant['id']) }}">{{$restaurant ->name}}</a></h5>
                        <p class="card-text">Dish Name : {{$product->name}}</p>
                        <p class="card-text">Price : {{$product -> price}}</p>
                    </div>
                </div>
            @empty
                    <p>No food has been created for this {{$restaurant->name}}. Please try again later.</p>
            @endforelse
        </div>

    {{$products->links()}}
    </div>
    @else
    <!-- When User is a logged in -->
    <div class="container" style="border:1px solid #cecece; padding-top: 20px; margin-top: 20px; text-align: center;">
        <h2 style="">{{$restaurant->name}}</h2>
        <p>{{$restaurant->address}}</p>
    

        <div class="col-xl" style="padding-top: 20px; padding-bottom: 20px;">
            @forelse($products as $product)
                <div class="card" style="width: 18rem; display:inline-block; margin-right: 10px; margin-top: 20px;">
                    <img class="card-img-top" src="{{asset('images/mcdonalds.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ url('/restaurant/'.$restaurant['id']) }}">{{$restaurant ->name}}</a></h5>
                        <p class="card-text">Dish Name : {{$product->name}}</p>
                        <p class="card-text">Price : {{$product -> price}}</p>
                        @if((Auth::user()->id) != $restaurant->id)
                            <!-- <button type="button" class="btn btn-primary" style="background-color: plum; border: none;">
                                <img src="{{ asset('icons/noun_shopping.png') }}" alt="Add to Cart Icon" style="height: 20px; width: 16px; vertical-align: text-bottom;">
                                Add to Cart
                            </button>
                            <button type="button" class="btn btn-primary" style="background-color: #32AC71; border: none">
                                <img src="{{ asset('icons/noun_shop.png') }}" alt="Add to Cart Icon" style="height: 20px; width: 16px; vertical-align: text-bottom;">
                                Purchase
                            </button> -->
                            

                            <form method="POST" action="{{route('OrderController.store')}}">
                                @csrf
                                <input name = "user_id" value = "{{Auth::user()->id}}" hidden>
                                <input name = "product_id" value = "{{$product->id}}" hidden>
                                <input name = "restaurant_id" value="{{$product->user_id}}"hidden>
                                <input name = "product_name" value = "{{$product->name}}" hidden>
                                <input name = "product_price" value = "{{$product->price}}" hidden>
                                <input name = "user_address" value = "{{Auth::user()->address}}" hidden>
                            <button type="submit" class="btn btn-primary" value="Order" style="background-color: #32AC71; border: none">
                                <img src="{{ asset('icons/noun_shop.png') }}" alt="Add to Cart Icon" style="height: 20px; width: 16px; vertical-align: text-bottom;">
                                Purchase
                            </button>
                            </form>
                        @endif
                    </div>
                </div>
                @if((Auth::user()->id) == $restaurant->id)
                    <a href="{{url('/product/'.$product['id'].'/edit')}}">Edit Product</a>
                    <form method="POST" action="{{ url('product/'.$product['id']) }}">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <input name="rest" type="hidden" value="{{ $product['user_id'] }}">
                        <input type="submit" value="delete" />
                    </form>
                @endif
            @empty
                    <p>No food has been created for this {{$restaurant->name}}. Please try again later.</p>
            @endforelse
        </div>

    {{$products->links()}}

    </div>
    @endif
@endsection