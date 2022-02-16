<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DateBaseController extends Controller
{
    public function index(Request $request)
    {
        $num=$request->input("number");
        $datanum =pow($num,2)*3.14;

        $link = mysqli_connect('localhost', 'root', '', 'network');
        $stmt = mysqli_prepare($link, "INSERT INTO results (result) VALUES (?)");
        mysqli_stmt_bind_param($stmt, "d", $datanum);
        $result = mysqli_stmt_execute($stmt);
        
        mysqli_close($link);

    
        return $datanum;
    }
}
