<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\BranchController;
use App\Http\Controllers\admin\StudentController;
use Illuminate\Support\Facades\Route;


// Routes for admin panel
Route::name('Admin.')->prefix('Admin')->middleware('auth', 'admin')->group(function () {
    Route::get('/Dashboard', [AdminDashboardController::class, 'index'])->name('Dashboard');
    // add Branch
    Route::get('All/Branches', [BranchController::class, 'index'])->name('All.Branches');
    Route::post('Add/New/Branch', [BranchController::class, 'add'])->name('Add.New.Branch');
    // students
    Route::get('All/Students', [StudentController::class, 'students'])->name('All.Students');
});
