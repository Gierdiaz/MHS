<?php

use App\Http\Controllers\{PatientController, UserController};
use App\Http\Controllers\Layout\LayoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', LayoutController::class)->name('layout');

Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('patients', [PatientController::class, 'index'])->name('patients.index');
Route::get('patients/{patient}', [PatientController::class, 'show'])->name('patients.show');
