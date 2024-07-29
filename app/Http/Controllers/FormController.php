<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //

    function add(Request $req){
       return $req->input();
    // echo $req->name;
    // echo $req->phone;
    // echo $req->city;
    }
}
