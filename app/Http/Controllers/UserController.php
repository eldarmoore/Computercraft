<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\SigninRequest;

class UserController extends MainController
{
    public function getSignin(){
        self::$data['title'] = self::$data['title'] . ' | signin page';
        return view('forms.signin', self::$data);
    }

    public function postSignin(SigninRequest $request){
        dd($_POST);
    }
}
