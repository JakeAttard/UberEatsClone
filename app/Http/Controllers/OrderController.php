<?php

namespace App\Http\Controllers;

use Session;

use App\Product;
use App\Order;
use App\User;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        return redirect('restaurant/'.$request->restaurant_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $order = Order::find($id);
    //     return view('orders.show')->with('order', $order);
    // }
}
