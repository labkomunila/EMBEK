<?php

use App\Http\Controllers\GoatsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth','admin'])->group(function () {

    Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/goats', [GoatsController::class, 'index'])->name('admin/goats');
    Route::get('admin/goats/create', [GoatsController::class, 'create'])->name('admin/goats/create');
    Route::post('admin/goats/save', [GoatsController::class, 'store'])->name('goats.store');
});

require __DIR__.'/auth.php';
