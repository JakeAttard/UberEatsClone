<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dish;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dish.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:255|unique:dishes',
            'price' => 'required|numeric|gt:0',
            'rest' => 'exists:users,id',
        ]);

        $dish = new Dish();
        $dish->name = $request->name;
        $dish->price = $request->price;
        $dish->user_id = $request->rest;
        $dish->save();
        return redirect('restaurant/'.$dish->user_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function edit($id)
    {
        $dish = Dish::find($id);
        return view('dish.edit')->with('dish',$dish);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255|unique:dishes',
            'price' => 'required|numeric|gt:0',
        ]);

        $dish = Dish::find($id);
        $dish->name = $request->name;
        $dish->price = $request->price;
        $dish->save();
        return redirect('restaurant/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $dish = Dish::find($id);
        $dish->delete();
        return redirect('restaurant/'.$request->rest);
    }
}
