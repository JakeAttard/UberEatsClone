<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Dish;

class RestaurantController extends Controller
{
    public function show($id) {
        $dishes = Dish::where('user_id',$id)->orderBy('id', 'desc')->paginate(5);
        $restaurant = User::find($id);
        return view('restaurant')->with('dishes',$dishes)->with('restaurant',$restaurant);
    }
}
