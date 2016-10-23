<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function contents(){
        return $this->hasMany('App\Content');
    }
}
