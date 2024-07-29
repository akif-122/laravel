<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function user(){
        $name = "Akif";
        $arr = ["Charsadda", "Peshawar", "Mardan"];
        return view("user",["name"=>$name,"city"=>$arr]);
    }
    
}
