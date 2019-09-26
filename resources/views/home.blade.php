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
    <div class="row">
        <div class="col-xl" style="padding-top: 20px;">
            @foreach ($restaurants as $restaurant)
                <div class="card" style="width: 18rem; display:inline-block; margin-right: 10px; margin-top: 20px;">
                    <img class="card-img-top" src="{{asset('images/mcdonalds.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ url('/restaurant/'.$restaurant['id']) }}">{{$restaurant['name']}}</a></h5>
                        <p class="card-text">{{$restaurant['address']}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection