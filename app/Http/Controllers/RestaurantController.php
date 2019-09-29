<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;

class RestaurantController extends Controller
{
    // RestaurantController show function is showing all the Restuarant products.
    // Only five products per page from that restuarant is being showed.
    public function show($id) {
        $products = Product::where('user_id',$id)->orderBy('id', 'desc')->paginate(5);
        $restaurant = User::find($id);
        return view('restaurant')->with('products',$products)->with('restaurant',$restaurant);
    }

    public function stats($id) {
        $restaurant = User::find($id);
        $orders = $restaurant->orders;
        $total_price = $orders->sum('price');
        return view('stats')->with('restaurant',$restaurant)->with('total',$total_price);
    }
}
