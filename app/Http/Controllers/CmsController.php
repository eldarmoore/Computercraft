<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Content;
use App\Order;

class CmsController extends MainController
{

    function __construct()
    {
        parent::__construct();
        $this->middleware('adminLoged');
    }

    public function getDashboard(){

        return view('cms.dashboard', self::$data);

    }

    public function getOrders(){
        self::$data['orders'] = Order::getAllOrders();
        return view('cms.orders', self::$data);
    }

}
