<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{

    public function products(){
        return $this->hasMany('App\Product');
    }

    static public function saveCategory($request){

        $image_name = 'default.png';

        $category = new self();
        $category->title = $request;
        $category->article = $request['article'];
        $category->url = $request['url'];
        $category->image = $image_name;

    }
}
