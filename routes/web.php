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

Auth::routes();

Route::post('orders', 'OrderController@store')->name('OrderController.store');

Route::resource('product','ProductController');
Route::resource('orders', 'OrderController')->except(['store', 'edit', 'update', 'destroy']);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/restaurant/{id}', 'RestaurantController@show');
Route::get('/newproduct','ProductController@create');
Route::get('popularProducts', 'ProductController@popularProducts')->name('ProductController.popularProducts');

// Documentation Page
Route::get('documentation', function() {
    return view('pages.documentation');
});

// Reflection Document Page
Route::get('reflectionDocumentation', function() {
    return view('pages.reflectionDocumentation');
});

// Popular Products
Route::get('popularProducts', function() {
    return view('product.popularProducts');
});