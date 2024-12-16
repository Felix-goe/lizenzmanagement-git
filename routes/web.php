<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::view('/admin','admin');
Route::view('/lizenzen', 'lizenzen_user');
