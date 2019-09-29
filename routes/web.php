<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\User;
use App\Product;
use App\Order;

//  Auth::routes() is a helper class that helps you generate all the routes required for user authentication.
Auth::routes();

// Resource method is used to create multiple routes for the ProductController & OrderController.
Route::resource('product','ProductController');
Route::resource('orders', 'OrderController')->except(['store', 'edit', 'update', 'destroy']);

// Getting the HomeController -> index function
Route::get('/', 'HomeController@index')->name('home');

// Getting the OrderController -> show function
Route::get('/order/{id}', 'OrderController@show');

// Getting OrderController -> index function
Route::get('/restaurant/{id}/orders', 'OrderController@index');

// Getting RestaurantController -> show function
Route::get('/restaurant/{id}', 'RestaurantController@show');

// Getting ProductController -> create function -> creating new product.
Route::get('/newproduct','ProductController@create');

// Getting RestaurantController -> stats function -> Used to display restaurant statistics such as (total amount).
Route::get('/restaurant/{id}/stats', 'RestaurantController@stats');

// Getting ProductController -> popularProducts function -> Used to display all the popularProducts within the last 30 days.
Route::get('popularProducts', 'ProductController@popularProducts')->name('ProductController.popularProducts');

// Posting all Orders from the OrderController store function.
Route::post('orders', 'OrderController@store')->name('OrderController.store');

// Documentation Page
Route::get('documentation', function() {
    return view('pages.documentation');
});

// ERD Page
Route::get('erdiagram', function() {
    return view('pages.erdiagram');
});

// Reflection Document Page
Route::get('reflectionDocumentation', function() {
    return view('pages.reflectionDocumentation');
});

// Popular Products
Route::get('popularProducts', function() {
    return view('product.popularProducts');
});