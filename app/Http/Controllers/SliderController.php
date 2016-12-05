<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\SliderRequest;
use Illuminate\Support\Facades\Session;
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

    public function store(SliderRequest $request)
    {
        Slider::saveSlider($request);
        return redirect('cms/sliders');
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

    public function update(SliderRequest $request, $id)
    {
        Slider::updateSlider($request, $id);
        return redirect('cms/sliders');
    }

    public function destroy($id)
    {
        $slider = Slider::find($id)->toArray();
        $slider = public_path() . '/images/carousel/' . $slider['image'];

        //$success = Storage::delete($product);
        Slider::destroy($id);
        unlink($slider);
        Session::flash('sm', 'Slider has been deleted');
        return redirect('cms/sliders');
    }
}
