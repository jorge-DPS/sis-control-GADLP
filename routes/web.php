<?php

use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\AsignacionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [AsignacionController::class, 'index'])->middleware(['auth', 'verified'])->name('asignaciones.index');
Route::get('/asignaciones/create', [AsignacionController::class, 'create'])->middleware(['auth', 'verified'])->name('asignaciones.create');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('personal', StaffController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
