<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends MainController
{
    static $data = ['title' => 'Home page'];

    public function index() {
        return view('home', self::data);
    }

    public function about() {
        return view('about', ['title' => 'About page']);
    }
}
