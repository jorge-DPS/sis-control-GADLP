<?php

use App\Http\Controllers\Admin\assignment\AssignmentController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\AsignacionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Technician\TaskController;
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

Route::get('admin/dashboard', [AssignmentController::class, 'index'])->middleware(['auth', 'verified'])->name('asignaciones.index');
Route::get('admin/asignaciones/create', [AssignmentController::class, 'create'])->middleware(['auth', 'verified'])->name('asignaciones.create');
Route::get('admin/asignaciones/{assignment}/edit', [AssignmentController::class, 'edit'])->middleware(['auth', 'verified'])->name('asignaciones.edit');
Route::middleware(['auth', 'verified'])->group(function () {
    // Route::resource('asignaciones', AssignmentController::class);
    Route::resource('admin/personal', StaffController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

// DASHBOARD ADMIN

// DASHBOARD TÉCNICO
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('technician/dashboard', [TaskController::class, 'index'])->name('task.index');
    Route::get('technician/{technicalAssignment}/create', [TaskController::class, 'create'])->name('task.create');
});

require __DIR__.'/auth.php';
