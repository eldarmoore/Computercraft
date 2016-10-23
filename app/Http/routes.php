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

/* Shop */
Route::get('shop', 'ShopController@categories');
Route::get('shop/order', 'ShopController@saveOrder');
Route::get('shop/checkout', 'ShopController@checkout');
Route::get('shop/cart-clear', 'ShopController@cartClear');
Route::get('shop/add-to-cart', 'ShopController@addToCart');
Route::get('shop/update-cart', 'ShopController@updateCart');
Route::get('shop/{category_url}', 'ShopController@categories');
Route::get('shop/{category_url}/{sub_category_url}', 'ShopController@products');
Route::get('shop/{category_url}/{sub_category_url}/{product_url}', 'ShopController@item');

/* User */
Route::controller('user', 'UserController');

/* CMS */
Route::controller('cms', 'CmsController');

/* Pages */
Route::get('/','PagesController@index');
Route::get('{url}', 'PagesController@boot');