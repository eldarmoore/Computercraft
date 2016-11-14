<?php

namespace App;

use App\File;
use Illuminate\Database\Eloquent\Model;
use Cart;
use Illuminate\Support\Facades\Session;

class Product extends Model {

    static public function getProducts($sub_category_url, &$data){

        $data['products'] = [];

        if($sub_category = Categorie::where('url', '=', $sub_category_url)->first()){

            $sub_category = $sub_category->toArray();
            $category = Categorie::where('sub_category', '=', $sub_category_url)->first();
            $category = $category->toArray();

            $data['title'] = $data['title'] . ' | ' . $sub_category['title'] . ' products';
            $data['cat_title'] = $sub_category['title'] . ' products';
            $data['cat_url'] = $sub_category_url;

            if($products = Categorie::find($sub_category['id'])->products){
                $data['products'] = $products->toArray();
            }

            $get = \Request::input('order');

            if($get && ($get == 'asc' || $get == 'desc') ){
                $products = Categorie::find($sub_category['id'])->products()->orderBy('price', $get)->get();
            }

            $data['products'] = $products->toArray();
        }
    }

    static public function getItem($product_url, &$data){
        $data['item'] = [];
        if($product = self::where('url', '=', $product_url)->first()){
            $data['item'] = $product->toArray();
            $data['title'] = $data['title'] . ' | ' . $data['item']['title'];
        }
    }

    static public function cartAdd($product_id){

        if(is_numeric($product_id) && ! Cart::get($product_id) ){

            if($product = self::find($product_id)){
                $product = $product->toArray();
                Cart::add($product_id, $product['title'], $product['price'], 1,[]);
                Session::flash('sm', $product['title'] . ' added to cart');
            }

        }
    }

    static public function updateCart($request){

        if(!empty($request['id'])){

            if($product = Cart::get($request['id'])){

                $product = $product->toArray();

                if(!empty($request['op'])){

                    if($request['op'] == 'plus'){

                        Cart::update($request['id'], [ 'quantity' => 1, ]);

                    } elseif($request['op'] == 'minus') {

                        if($product['quantity'] - 1 == 0){

                            Cart::remove($request['id']);

                        } else {

                            Cart::update($request['id'], ['quantity' => - 1, ]);

                        }

                    }

                }

            }

        }

    }

    static public function saveProduct($request){

        $image_name = 'default.jpg';
        $images = '';

//        dd($request['image']);

        if ( $request->hasFile('image') ) {

            foreach ($request['image'] as $image) {

                if ($image->isValid()) {

                    $file = $image;
                    $image_name = date('Y.m.d.H.m.s') . '-' . $file->getClientOriginalName();
                    $images .= $image_name . ',';
                    //dd($request['url']);
                    $image->move( public_path() . '/images/products/' . $request['url'] , $image_name );

                }

            }

        }

        $product = new self();
        $product->title = $request['title'];
        $product->article = $request['article'];
        $product->url = $request['url'];
        $product->image = $images;
        $product->price = $request['price'];
        $product->sn = $request['sn'];
        $product->categorie_id = $request['categorie_id'];
        $product->save();
        Session::flash('sm', 'Product has been saved');

    }

    static public function updateProduct($request, $id){

        $image_name = '';
        $images = '';

        if ( $request->hasFile('image') ) {

            foreach ($request['image'] as $image) {

                if ($image->isValid()) {

                    $file = $image;
                    $image_name = date('Y.m.d.H.m.s') . '-' . $file->getClientOriginalName();
                    $images .= $image_name . ',';
                    //dd($request['url']);
                    $image->move( public_path() . '/images/products/' . $request['url'] , $image_name );

                }

            }

        }

        $product = self::find($id);
        $product->title = $request['title'];
        $product->article = $request['article'];
        $product->url = $request['url'];
        $product->primary_image = $request['primary_image'];

        if($images){
            $product->image = $images;
        }

        $product->price = $request['price'];
        $product->sn = $request['sn'];
        $product->categorie_id = $request['categorie_id'];
        $product->save();
        Session::flash('sm', 'Product has been updated');

    }

}
