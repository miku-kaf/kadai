<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class area_circleController extends Controller
{
    public function index(Request $request)
    {
        $num=$request->input("number");
        return pow($num,2)*3.14;
    }
}
