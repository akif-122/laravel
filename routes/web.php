<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/user", [UserController::class, "user"]);


Route::view("/form", "form");

Route::post("/form", [FormController::class, "add"]);