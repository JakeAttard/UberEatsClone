<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Product;
use App\Order;
use App\User;

class OrderController extends Controller
{
    // Index Function
    public function index($id) {
        $restaurant = User::find($id);
        $orders = $restaurant->orders;
        return view('orders.index')->with('restaurant',$restaurant)->with('orders',$orders);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Store function -> Storing all the information of the Order into the DB
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'product_id' => 'required',
        ]);

        $order = new Order();
        $order->user_id = $request->user_id;
        $order->product_id = $request->product_id;
        $order->save();

        return redirect("orders/".$order->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // show function is showing all the orders completed
    public function show($id) {
        $order = DB::table('products')
        ->join('orders', 'orders.product_id', '=', 'products.id')
        ->join('users', 'users.id', '=', 'orders.user_id')
        ->whereRaw('orders.id = ?', array($id))
        ->select('products.name as product', 'products.price as price', 'users.name as user', 'users.address as address', 'orders.created_at as time', 'users.id as id')->first();
        return view('orders.show')->with('order', $order);
    }
}
