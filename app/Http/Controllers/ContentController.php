<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ContentRequest;
use App\Menu;
use App\Content;
use Illuminate\Support\Facades\Session;

class ContentController extends MainController
{

    function __construct()
    {
        parent::__construct();
        $this->middleware('adminLoged');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$data['content'] = Content::all()->toArray();
        return view('cms.content', self::$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //self::$data['menu'] = []; //NO MENU SIMULATION!!!
        self::$data['content'] = Content::all()->toArray();
        return view('cms.add_product', self::$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContentRequest $request)
    {
        Content::saveContent($request);
        return redirect('cms/content');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        self::$data['content_id'] = $id;
        return view('cms.delete_content', self::$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$data['content'] = Content::find($id)->toArray();
        self::$data['menu'] = Menu::getAllOrdered( self::$data['content']['menu_id'] );
        return view('cms.edit_content', self::$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContentRequest $request, $id)
    {
        Content::updateContent($request, $id);
        return redirect('cms/content');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Content::destroy($id);
        Session::flash('sm', 'Content has been deleted');
        return redirect('cms/content');
    }
}
