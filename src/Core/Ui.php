<?php

namespace Genericmilk\Element\Core;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Ui extends Controller
{
    public function Dashboard(){
        return view('element::dashboard');
    }
}