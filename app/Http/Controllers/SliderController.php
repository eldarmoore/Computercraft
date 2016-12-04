<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Slider;
use DB;

class SliderController extends MainController
{
    public function index() {
        self::$data['sliders'] = Slider::all()->toArray();
        return view('cms.sliders', self::$data);
    }

    public function create()
    {
        return view('cms.add_slider', self::$data);
    }

    public function show($id)
    {
        self::$data['slider_id'] = $id;
        return view('cms.delete_slider', self::$data);
    }

    public function edit($id)
    {
        self::$data['slider'] = Slider::find($id)->toArray();
        return view('cms.edit_slider', self::$data);
    }

    public function update($id)
    {
        Product::updateProduct($id);
        return redirect('cms/products');
    }
}
