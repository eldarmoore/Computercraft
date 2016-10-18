<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    static public function getProducts($sub_category_url, &$data){

        $data['products'] = [];

        if($category = Categorie::where('url', '=', $sub_category_url)->first()){

            $category = $category->toArray();

            $data['title'] = $data['title'] . ' | ' . $category['title'] . ' products';

            $data['cat_title'] = $category['title'] . ' products';

            $data['cat_url'] = $sub_category_url;

            if($products = Categorie::find($category['id'])->products){

                $data['products'] = $products->toArray();

            }
        }
    }

    static public function getItem($product_url, &$data){
        $data['item'] = [];
        if($product = self::where('url', '=', $product_url)->first()){
            $data['item'] = $product->toArray();
            $data['title'] = $data['title'] . ' | ' . $data['item']['title'];
        }
    }

}
