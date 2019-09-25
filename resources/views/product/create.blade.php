@extends('layouts.app')

@section('title')
    Create Product
@endsection

@section('content')
    <div class="container">
    @if(count($errors) > 0)
        <div class="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h3>Create new dish for {{Auth::user()->name}}</h3>
    <form method="POST" action="{{url('product')}}">
        {{csrf_field()}}
        <input name="restaurant" type="hidden" value="{{Auth::user()->id}}">
        <p><label>Name: </label><input type="text" name="name" value="{{old('name')}}" /></p>
        <p><label>Price: </label><input type="text" name="price" value="{{old('price')}}" /></p>
        <input type="submit" value="Create" />
    </form>
    </div>
@endsection