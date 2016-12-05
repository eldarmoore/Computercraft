<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use DB;

class Categorie extends Model
{

    static public function getCategorie($category_url, &$data){
        $data['category'] = [];
        if($category = self::where('url', '=', $category_url)->first()){
            $data['category'] = $category->toArray();
            $data['title'] = $data['title'] . ' | ' . $data['category']['title'];
        }

    }

    public function products(){
        return $this->hasMany('App\Product');
    }

    static public function saveCategory($request){

        $image_name = 'default.png';

        if ( $request->hasFile('image') && $request->file('image')->isValid() ) {
            $file = $request->file('image');
            $image_name = date('Y.m.d.H.m.s') . '-' . $file->getClientOriginalName();
            //dd($image_name);
            $request->file('image')->move( public_path() . '/images' , $image_name);
        }

        $category = new self();
        //$category->sub_category = $request['sub_category'];
        $category->title = $request['title'];
        $category->article = $request['article'];
        $category->url = $request['url'];
        $category->sub_category = $request['sub_category'];
        $category->image = $image_name;
        $category->save();
        Session::flash('sm', 'Category has been saved');
    }

    static public function updateCategory($request, $id){

        $image_name = 'default.jpg';

        if ( $request->hasFile('image') && $request->file('image')->isValid() ) {
            $file = $request->file('image');
            $image_name = date('Y.m.d.H.m.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move( public_path() . '/images' , $image_name);
        }

        $category = self::find($id);
        $category->title = $request['title'];
        $category->article = $request['article'];
        $category->url = $request['url'];
        $category->sub_category = $request['sub_category'];
        if($image_name){
            $category->image = $image_name;
        }

        $category->save();
        Session::flash('sm', 'Category has been updated');

    }

    static public function getAllOrdered( $categorie_id ){
        $sql = "SELECT * FROM categories "
            . "ORDER BY CASE WHEN id = $categorie_id THEN 0 ELSE id END";
        return DB::select($sql);
    }
}
