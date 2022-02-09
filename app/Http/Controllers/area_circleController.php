<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class area_circleController extends Controller
{
    public function index(Request $request)
    {
        $num=$request->input("number");
        return $num*$num*3.14;
    }
}
