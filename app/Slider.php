<?php

namespace App;

use App\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Slider extends Model
{
    public $timestamps = false;

    static public function updateSlider($request, $id){

        $image_name = '';

        if ( $request->hasFile('image') ) {

            if ($request['image']->isValid()) {

                $file = $request['image'];
                $image_name = $file->getClientOriginalName();
                //dd($request['url']);
                $request['image']->move( public_path() . '/images/carousel/' , $image_name );

            }
        }

        $slider_img = public_path() . '/images/carousel/' . $request['image'];

        $slider = self::find($id);
        $slider->title = $request['title'];
        $slider->article = $request['article'];
        $slider->link = $request['link'];

        if($image_name){
            $img = Slider::find($id)->toArray();
            $path = public_path() . '/images/carousel/' . $img['image'];
            unlink($path);
            $slider->image = $image_name;
        }

        $slider->button = $request['button'];
        $slider->status = 1;
        $slider->save();

        Session::flash('sm', 'Slider has been saved');

    }

    static public function saveSlider($request){

        if ( $request->hasFile('image') ) {

            if ($request['image']->isValid()) {

                $file = $request['image'];
                $image_name = $file->getClientOriginalName();
                //dd($request['url']);
                $request['image']->move( public_path() . '/images/carousel/' , $image_name );

            }
        }

        $slider = new self();
        $slider->title = $request['title'];
        $slider->article = $request['article'];
        $slider->link = $request['link'];
        $slider->image = $image_name;
        $slider->button = $request['button'];
        $slider->status = 1;
        $slider->save();
        Session::flash('sm', 'Slider has been saved');
    }


}
