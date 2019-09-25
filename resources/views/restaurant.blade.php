@extends('layouts.app')

@section('title')
    Restaurants
@endsection

@section('content')
    <div class="container">
        <h2>{{$restaurant->getAttribute('name')}}</h2>
        <p>{{$restaurant->getAttribute('address')}}</p>
    

    @forelse($products as $product)
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
    @endforelse

    {{$products->links()}}

    </div>
@endsection