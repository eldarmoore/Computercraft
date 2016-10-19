<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|


Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/','PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('shop', 'ShopController@categories');
Route::get('shop/add-to-cart', 'ShopController@addToCart');
Route::get('shop/{category_url}', 'ShopController@categories');
Route::get('shop/{category_url}/{sub_category_url}', 'ShopController@products');
Route::get('shop/{category_url}/{sub_category_url}/{product_url}', 'ShopController@item');