<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;

Route::get('/', function () {
    return view('home');
});

Route::view('/admin', 'admin');
Route::get('/lizenzen', [ComputerController::class, 'index'])->name('lizenz');
Route::post('/lizenzen/speichern', [ComputerController::class, 'speichern']);
Route::post('/lizenzen/löschen', [ComputerController::class, 'löschen']);

