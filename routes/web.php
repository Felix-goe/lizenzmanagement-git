<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\UserPanel\UserController;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\LizenzController;
use App\Http\Controllers\SekretariatController;

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
});

//Computer-Routen
Route::post('/store', [ComputerController::class, 'store'])->name('store');
Route::get('/getall', [ComputerController::class, 'getall'])->name('getall');
Route::get('/employee/{id}/edit', [ComputerController::class, 'edit'])->name('edit');
Route::post('/employee/update', [ComputerController::class, 'update'])->name('update');
Route::delete('/employee/delete', [ComputerController::class, 'delete'])->name('delete');


// Lizenz-Routen
Route::get('/licenses', [LizenzController::class, 'getAll'])->name('licenses.getall');
Route::post('/licenses/store', [LizenzController::class, 'store'])->name('licenses.store');
Route::get('/licenses/{LizenzID}/edit', [LizenzController::class, 'edit'])->name('licenses.edit');
Route::put('/licenses/{LizenzID}/update', [LizenzController::class, 'update'])->name('licenses.update');
Route::delete('/licenses/{LizenzID}/delete', [LizenzController::class, 'delete'])->name('licenses.delete');

// Lizenz-Verknüpfungen mit Computern
Route::get('/licenses/view/{PCID}', [LizenzController::class, 'viewByPC'])->name('licenses.viewByPC');
Route::get('/licenses/pc/{PCID}', [LizenzController::class, 'getByPC'])->name('licenses.getByPC');

// Route, um alle Sekretariate zu laden (Read)
Route::get('/sekretariate', [SekretariatController::class, 'getAll'])->name('getAllSekretariate');

// Route, um ein neues Sekretariat zu speichern (Create)
Route::post('/sekretariate/store', [SekretariatController::class, 'store'])->name('storeSekretariat');

// Route, um ein Sekretariat zu aktualisieren (Update)
Route::post('/sekretariate/update', [SekretariatController::class, 'update'])->name('updateSekretariat');

// Route, um ein Sekretariat zu löschen (Delete)
Route::delete('/sekretariate/delete', [SekretariatController::class, 'destroy'])->name('deleteSekretariat');






