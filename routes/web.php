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

Auth::routes();

Route::resource('product','ProductController');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/restaurant/{id}', 'RestaurantController@show');
Route::get('/newproduct','ProductController@create');

// Documentation Page
Route::get('documentation', function() {
    return view('pages.documentation');
});

// Reflection Document Page
Route::get('reflectionDocumentation', function() {
    return view('pages.reflectionDocumentation');
});