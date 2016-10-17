<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    static public function getProducts($sub_category_url, &$data){

        if($category = Categorie::where('url', '=', $sub_category_url)->first()){

            $category = $category->toArray();

            if($products = Categorie::find($category['id'])->products){

                $data['products'] = $products->toArray();

            }
        }



    }

}
