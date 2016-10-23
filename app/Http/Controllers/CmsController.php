<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Content;

class CmsController extends MainController
{

    public function getDashboard(){

        return view('cms.cms_master', self::$data);

    }

}
