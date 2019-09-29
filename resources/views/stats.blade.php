@extends('layouts.app')

@section('title')
    Statistic
@endsection('title')

@section('content')
    <div class="documentationTitle">
        <h3>Sales for {{$restaurant->getAttribute('name')}}</h3>
    </div>
    <div class="container" style="border:1px solid #cecece; padding-top: 20px; margin-top: 20px; text-align: center;">
        <div class="col-xl" style="padding-top: 20px; padding-bottom: 20px;">
            <p>Total amount from sales in last 30 days: $</p>
            <p>Total amount from all sales: ${{$total}}</p>
        </div>
    </div>
@endsection('content')