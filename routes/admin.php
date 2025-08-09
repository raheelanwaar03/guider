<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\BranchController;
use Illuminate\Support\Facades\Route;


// Routes for admin panel
Route::name('Admin.')->prefix('Admin')->middleware('auth', 'admin')->group(function () {
    Route::get('/Dashboard', [AdminDashboardController::class, 'index'])->name('Dashboard');
    // add Branch
    Route::post('Add/New/Branch', [BranchController::class, 'add'])->name('Add.New.Branch');
});
