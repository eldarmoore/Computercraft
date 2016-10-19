<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Categorie;
use App\Product;

class ShopController extends MainController
{
    public function categories(){
        self::$data['title'] = self::$data['title'] . ' | Shop categories';
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

    public function addToCart(Request $request){ // Transfer me object from Request class!!!

        if(isset($request['product_id'])){ // if exist Transfering to the Product Model
            Product::cartAdd($request['product_id']);
        }
    }
}
