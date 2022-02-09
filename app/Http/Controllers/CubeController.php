<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CubeController extends Controller
{
    public function index(Request $request)
    {
        $num=$request->input("number");
        return pow($num,3);
    }
}
