<?php

use App\Http\Controllers\branch\BranchDashboardController;
use Illuminate\Support\Facades\Route;


// Routes for Brach Mangement
Route::name('Branch.')->prefix('Branch')->middleware('auth', 'branch')->group(function () {
    Route::get('/Dashboard', [BranchDashboardController::class, 'index'])->name('Dashboard');
});
