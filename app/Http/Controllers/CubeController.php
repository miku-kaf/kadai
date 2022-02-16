<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CubeController extends Controller
{
    public function index(Request $request)
    {
        $num=$request->input("number");
        $i=pow($num,3);
        $link = mysqli_connect('mysql57.tcagame01.sakura.ne.jp', 'tcagame01', 'tcagame2021', 'tcagame01_20j70041');
        $stmt = mysqli_prepare($link, "INSERT INTO results (result) VALUES (?)");
        mysqli_stmt_bind_param($stmt, "s", $i);
        $result = mysqli_stmt_execute($stmt);
        
        mysqli_close($link);

        return $i;
    }
}
