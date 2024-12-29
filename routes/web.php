<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;

Route::get('/', function () {
    return view('home');
});

Route::view('/admin', 'admin');
Route::get('/computer', [ComputerController::class, 'index']);
Route::post('/computer/speichern', [ComputerController::class, 'speichern']);
Route::post('/computer/löschen', [ComputerController::class, 'löschen']);

