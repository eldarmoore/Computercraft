<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\SigninRequest;
use App\User;
use Session;

class UserController extends MainController
{
    public function getSignin(){
        // echo bcrypt('123456'); die();
        self::$data['title'] = self::$data['title'] . ' | signin page';
        return view('forms.signin', self::$data);
    }

    public function getSignup(){
        self::$data['title'] = self::$data['title'] . ' | signup page';
        return view('forms.signin', self::$data);
    }

    public function postSignin(SigninRequest $request){

        if( ! User::validateUser($request['email'], $request['password']) ){

            self::$data['title'] = self::$data['title'] . ' | signin page';
            return view('forms.signin', self::$data)->withErrors('Wrong email/password combination');

        } else {

            return redirect('');

        }
    }

    public function getLogout(){

        Session::forget('user_id');
        Session::forget('user_name');

        if( Session::has('is_admin') ){

            Session::forget('is_admin');

        }

        return redirect('user/signin');
    }

    public function getProfile(){
        echo 'TO DO - Profile!';
    }
}
