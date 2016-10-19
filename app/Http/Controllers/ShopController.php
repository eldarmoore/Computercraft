<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Categorie;
use App\Product;
use Cart;

class ShopController extends MainController
{
    public function categories(){
        self::$data['title'] = self::$data['title'] . ' | Shop categories';
        self::$data['categories'] = Categorie::all()->toArray();
        return view('content.categories', self::$data);
    }

    public function products($category_url, $sub_category_url){
        Product::getProducts($sub_category_url, self::$data);
        return view('content.products', self::$data);
    }

    public function item($category_url, $sub_category_url, $product_url){
        Product::getItem($product_url, self::$data);
        return view('content.item', self::$data);
    }

    public function checkout(){
        self::$data['title'] = self::$data['title'] . ' | Checkout page';
        $cartCollection = Cart::getContent();
        $cart_all = $cartCollection->toArray();
        sort($cart_all);
        self::$data['cart'] = $cart_all;
        return view('content.checkout', self::$data);
    }

    public function addToCart(Request $request){ // Transfer me object from Request class!!!

        if(isset($request['product_id'])){ // if exist Transfering to the Product Model
            Product::cartAdd($request['product_id']);
        }
    }

    public function cartClear(){
        Cart::clear();
        return redirect('shop/checkout');
    }

    public function updateCart(Request $request){
        Product::updateCart($request);
    }

    public function saveOrder(){
        echo __METHOD__;
    }

}
