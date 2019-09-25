<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;

class RestaurantController extends Controller
{
    public function show($id) {
        $products = Product::where('user_id',$id)->orderBy('id', 'desc')->paginate(5);
        $restaurant = User::find($id);
        return view('restaurant')->with('products',$products)->with('restaurant',$restaurant);
    }
}
