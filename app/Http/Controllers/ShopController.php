<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Categorie;

class ShopController extends MainController
{
    public function categories(){
        self::$data['title'] = self::$data['title'] . ' | Shop categories';
        self::$data['categories'] = Categorie::all()->toArray();
        return view('content.categories', self::$data);
    }

    public function products($category_url, $sub_category_url){
        echo $category_url;
        echo '<br>';
        echo $sub_category_url;
    }
}
