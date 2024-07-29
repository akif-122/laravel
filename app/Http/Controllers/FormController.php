<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //

    function add(Request $req){
        $req->validate([
            "name"=> "required | min:3 | max:10 ",
            "city"=> "required  ",
            "phone"=> "required | min:10 | max: 11",
            "skill"=> "required",
            "age"=> "required ",
        ]);
       return $req->input();

    // echo $req->name;
    // echo $req->phone;
    // echo $req->city;
    }
}
