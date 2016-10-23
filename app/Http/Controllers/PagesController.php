<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Categorie;

class PagesController extends MainController
{

    public function index() {
        self::$data['title'] = self::$data['title'] . ' | Home page';
        return view('content.home', self::$data);
    }

    public function boot($url){
        echo __METHOD__ . ' -----' . $url;
    }

}
