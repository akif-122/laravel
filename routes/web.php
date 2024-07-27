<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/home2", function(){
    return view("home2");
});
Route::get("/about", function(){
    return view("about");
});

Route::get("/contact", function(){
    return view("contact");
});

// Route::get("/home", function () {
//     return view('home');
// });