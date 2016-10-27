<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CategoryRequest;
use App\Categorie;
use Illuminate\Support\Facades\Session;

class CategoryController extends MainController
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
        self::$data['categories'] = Categorie::all()->toArray();
        return view('cms.categories', self::$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        self::$data['categories'] = Categorie::all()->toArray();
        return view('cms.add_category', self::$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        Categorie::saveCategory($request);
        return redirect('cms/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        self::$data['category_id'] = $id;
        return view('cms.delete_category', self::$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$data['category'] = Categorie::find($id)->toArray();
        return view('cms.edit_category', self::$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        Categorie::updateCategory($request, $id);
        return redirect('cms/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categorie::destroy($id);
        Session::flash('sm', 'Category has been deleted');
        return redirect('cms/categories');
    }
}
