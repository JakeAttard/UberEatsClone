<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
            'image' => 'image',
            'restaurant' => 'exists:users,id',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->user_id = $request->restaurant;
        
        // Storing the image
        if ($request->has('image')) {
            $image = $request->file('image');
            $name = Str::slug($request->input('name')).'_'.time();
            $filePath = '/uploads/images/'.$name.'.'.$image->getClientOriginalExtension();
            $image->storeAs('/uploads/images/', $name.'.'.$image->getClientOriginalExtension(), 'public');
            $product->image = $filePath;
        }

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

    // Function popularProducts to get the top 5 most popular products ordered in the last 30 days
    public function popularProducts() {
        $products = DB::table('products')
        ->join('orders', 'orders.product_id', '=', 'products.id')
        ->whereDate('orders.created_at', '>', date('c', strtotime('-30 days')))
        ->select('products.*')->groupBy('products.id')->orderByRaw('count(products.id) desc')->get();

        return view('products.popularProducts')->with('products', $products->slice(0, 5));
    }
}
