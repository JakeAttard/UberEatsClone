@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{$restaurant->getAttribute('name')}}</h2>
        <p>{{$restaurant->getAttribute('address')}}</p>
    

    @forelse($dishes as $dish)
            <p>Dish Name : {{$dish['name']}}</p> 
            <p>Price : {{$dish['price']}}</p>
            @if(Auth::user()->id == $dish['user_id'])
                <a href="{{url('/dish/'.$dish['user_id'].'/edit')}}">edit dish</a>
                <form method="POST" action="{{ url('dish/'.$dish['id']) }}">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input name="rest" type="hidden" value="{{ $dish['user_id'] }}">
                    <input type="submit" value="delete" />
                </form>
            @endif
        @empty
            <p>No dishes to display</p>
    @endforelse

    {{$dishes->links()}}

    </div>
@endsection