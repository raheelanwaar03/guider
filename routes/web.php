<?php

use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Web Routes
Route::get('/', [FrontPageController::class, 'index'])->name('home');
Route::get('/Contact', [FrontPageController::class, 'contact'])->name('contact');
Route::get('/Coaching', [FrontPageController::class, 'coaching'])->name('coaching');
Route::get('/Single-Coaching', [FrontPageController::class, 'coachingSingle'])->name('Single-coaching');
Route::get('/Visa', [FrontPageController::class, 'visa'])->name('visa');
Route::get('/Single-Visa', [FrontPageController::class, 'visaSingle'])->name('Single-visa');
Route::get('/Country', [FrontPageController::class, 'country'])->name('country');
Route::get('/Single-Country', [FrontPageController::class, 'countrySingle'])->name('Single-country');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
