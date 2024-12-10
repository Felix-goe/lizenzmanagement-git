<?php

use Illuminate\Support\Facades\Route;


#Route::get('/', function () {
#    return view('welcome');
# });


Route::get('/', function () {
    return view('home');
});

Route::view('lizenzen_user','lizenzen_user');