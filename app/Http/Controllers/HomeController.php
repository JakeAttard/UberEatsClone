<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // Index function for the HomeController is returning all the restaurants created with the role 'restaurant'.
    public function index()
    {
        $restaurants = User::where('role', 'restaurant')->get()->toArray();
        return view('home')->with('restaurants',$restaurants);
    }
}
