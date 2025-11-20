<?php

use App\Http\Controllers\Admin\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [LandingController::class, 'index']);


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('students', StudentController::class);
});
