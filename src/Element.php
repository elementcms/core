<?php

namespace Element\Core;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class Element extends Controller
{
    public function Page(){
        return 123;
        return view('element::hello')->with('Api',$Api);
    }

}