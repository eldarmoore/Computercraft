<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends MainController
{
    public function index() {
        $data = ['title' => 'Home page'];
        return view('home', $data);
    }

    public function about() {
        return view('about', ['title' => 'About page']);
    }
}
