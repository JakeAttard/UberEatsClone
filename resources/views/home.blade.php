@extends('layouts.app')

@section('title')
    HomePage
@endsection

@section('content')
    <div class="mainPageContent">
        <img class="mainPageContentPhotos" src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats-v2/dd89238d0aaaa2c9fd0e895ec501049b.svg" alt="">
        <img class="mainPageContentPhotos" src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats-v2/f39da638909566357729555024117e3f.svg" alt="">

        <h1>Restaurants you love, delivered to you</h1>
        <form class="searchBarRestaurantContent">
            <input id="searchRestaurant" name="searchBar" type="text" placeholder="Enter Resturant Name" />
            <button class="homePageSearchButton" type="button">FIND FOOD</button>
        </form>
    </div>

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($restaurants as $restaurant)
                <div class="card">
                    <div class="card-header"><a href="{{ url('/restaurant/'.$restaurant['id']) }}">{{$restaurant['name']}}</a></div>
                    <div class="card-body">
                        {{$restaurant['address']}}
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</div>
@endsection