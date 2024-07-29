<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //

    function add(Request $req){
        $req->validate([
            "name"=> "required | min:3 | max:10 ",
            "city"=> "required | uppercase ",
            "phone"=> "required | min:10 | max: 11",
            "skill"=> "required",
            "age"=> "required ",
        ],[
            "name.required"=>"Name is Required",
            "name.min"=>"Name minimum should be 3 characters",
            "name.max"=>"Name maximum should be 10 Characters",
            "city.required"=>"City is Required",
            // "city.uppercase"=>"Please Capital Letters.",
            "phone.required"=>"Phone is required",
            "phone.min"=>"Phone min should be 10 characters",
            "phone.max"=>"Phone max should be 11 characters",
            "skill.required"=>"skill is required",
            "age.required"=>"Age is required"
        ]);
       return $req->input();

    // echo $req->name;
    // echo $req->phone;
    // echo $req->city;
    }
}
