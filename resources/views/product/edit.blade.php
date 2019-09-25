@extends('layouts.app')

@section('title')
    Edit Product
@endsection

@section('content')
    <h3>Edit existing dish</h3>
    @if(count($errors) > 0)
        <div class="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ url('product/'.$product->getattribute('id')) }}">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <p>
            <label>Name: </label>
            <input type="text" name="name" value="{{$product->getattribute('name')}}"/>
        </p>
        <p>
            <label>Price: </label>
                <input type="text" name="price" value="{{$product->getattribute('price')}}"/>
        </p>
        <input type="submit" value="Submit changes" />
    </form>
@endsection