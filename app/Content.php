<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

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

    static public function saveContent($request){
        $content = new self();
        $content->menu_id = $request['menu'];
        $content->title = $request['title'];
        $content->article = $request['article'];
        $content->save();
        Session::flash('sm', 'Content has been saved');
    }

    static public function updateContent($request, $id){
        $content = self::find($id);
        $content->menu_id = $request['menu'];
        $content->title = $request['title'];
        $content->article = $request['article'];
        $content->save();
        Session::flash('sm', 'Content has been updated');
    }
}
