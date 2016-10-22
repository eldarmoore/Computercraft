<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;
use Hash;

class User extends Model
{
    static public function validateUser($email, $password){

        $valid = false;

        $sql =  "SELECT * FROM users u "
                . "JOIN user_roles r ON u.id = r.user_id "
                . "WHERE email = ?";

        if($user = DB::select($sql, [$email])){

            $user = $user[0];

            if(Hash::check($password, $user->password)) {

                $valid = true;

                if( $user->role == 3 ){

                    Session::set('is_admin', true);

                }

                Session::set('user_id', $user->id);
                Session::set('user_name', $user->name);
                Session::flash('sm', 'Welcome, ' . $user->name . ' you are now signed in');

            }

        }

        return $valid;
    }
}
