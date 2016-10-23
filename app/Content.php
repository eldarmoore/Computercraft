<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    static public function getContent($menu_url, &$data){

        $data['contents'] = [];

        if($menu = Menu::where('url', '=', $menu_url)->first()){

            $menu = $menu->toArray();

            $data['title'] = $data['title'] . ' | ' . $menu['title'];

            if($contents = Menu::find($menu['id'])->contents){

                $data['contents'] = $contents->toArray();

            }
        }
    }
}
