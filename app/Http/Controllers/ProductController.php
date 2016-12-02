<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\Categorie;
use App\Product;
use Illuminate\Support\Facades\Session;
use DB;

class ProductController extends MainController
{
// *  interfere with Ajax product search when not logged in.!!!!!

//    function __construct()
//    {
//        parent::__construct();
//        $this->middleware('adminLoged');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$data['products'] = Product::all()->toArray();
        return view('cms.products', self::$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function requestProducts(Request $request){

        if(!empty($request['search'])){

            $user_search = filter_var($request['search'],  FILTER_SANITIZE_STRING);

            if($user_search){

                $result = DB::table('products')->where('title', 'like', "%$user_search%")->limit(10)->get();

//                $sql = "SELECT products.*,categories.url sub_category,main_categories.url category
//                FROM products
//                INNER JOIN categories ON products.categorie_id = categories.id
//                LEFT JOIN categories main_categories ON categories.sub_category = main_categories.id
//                WHERE products.id LIKE ? OR products.article LIKE ? LIMIT 5";

//                $query = $db->prepare($sql);
//                $query->setFetchMode(PDO::FETCH_OBJ);
//                $query->execute( ["%$user_search%", "%$user_search%"] );
//                $result = $query->fetchAll();

                if(count($result) > 0){

                    return json_encode($result);

                } else {

                    return false;

                }

            }

        }
    }

    public function create()
    {
        return view('cms.add_product', self::$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        Product::saveProduct($request);
        return redirect('cms/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        self::$data['product_id'] = $id;
        return view('cms.delete_product', self::$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$data['product'] = Product::find($id)->toArray();
        self::$data['categories'] = Categorie::getAllOrdered( self::$data['product']['categorie_id'] );
        return view('cms.edit_product', self::$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('cms/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        Session::flash('sm', 'Product has been deleted');
        return redirect('cms/products');
    }
}
