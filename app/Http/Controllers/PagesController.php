<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Content;

class PagesController extends MainController
{

    public function index() {
        self::$data['title'] = self::$data['title'] . ' | Home page';
        self::$data['new_products'] = Product::orderBy('id', 'desc')->take(6)->get();
        return view('content.home', self::$data);
    }

    public function boot($url){
        Content::getContent($url, self::$data);
        return view('content.boot', self::$data);
    }

}
