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
        self::$data['categories'] = Categorie::all()->toArray();
        return view('content.categories', self::$data);
    }

    public function products($category_url, $sub_category_url){
        Product::getProducts($sub_category_url, self::$data);
        dd(self::$data);
    }
}
