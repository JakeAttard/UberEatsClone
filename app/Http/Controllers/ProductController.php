<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Index function not used.
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Products create function which is returning the product.create view.
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     // Products store function is storing the product name, price and restaurant id for all new products created.
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:255|unique:products,name,NULL,id,user_id,'.$request->user_id,
            'price' => 'required|numeric|gt:0',
            'restaurant' => 'exists:users,id',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->user_id = $request->restaurant;
        $product->save();
        return redirect('restaurant/'.$product->user_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // Products show function wasn't used for the ProductController.
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // Products edit function is returning the products.edit view. This for when restuarant users want to edit their product.
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit')->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // Product update function is updating the edited products into the DB. This can either be the product name or price.
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required|max:255|unique:products,name,NULL,id,user_id,'.$request->user_id,
            'price' => 'required|numeric|gt:0',
        ]);
        
        $product = Product::find($id);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        return redirect('/restaurant/'.$product->user_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // Destory function is used to delete a product.
    public function destroy(Request $request, $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('restaurant/'.$request->rest);
    }
}
