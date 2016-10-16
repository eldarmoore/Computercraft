<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends MainController
{
    public function index() {
        return view('home', ['title' => 'Home page']);
    }

    public function about() {
        return view('about', ['title' => 'About page']);
    }
}
