<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateSheetController extends Controller
{
    public function index(Request $request)
    {
        $num=$request->input("number");
        return pow($num,2);
    }
}
