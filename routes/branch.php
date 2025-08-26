<?php

use App\Http\Controllers\branch\BranchDashboardController;
use App\Http\Controllers\branch\BranchStudentController;
use Illuminate\Support\Facades\Route;


// Routes for Brach Mangement
Route::name('Branch.')->prefix('Branch')->middleware('auth', 'branch')->group(function () {
    Route::get('/Dashboard', [BranchDashboardController::class, 'index'])->name('Dashboard');
    Route::get('/Add/Student', [BranchStudentController::class, 'addStudent'])->name('Add.Student');
    Route::post('/Store/Student', [BranchStudentController::class, 'storeStudent'])->name('Store.Student');
    Route::get('/All/Students', [BranchStudentController::class, 'allStudents'])->name('All.Students');
    Route::get('/Student/Detail/{id}', [BranchStudentController::class, 'studentDetails'])->name('Student.Detail');
});
