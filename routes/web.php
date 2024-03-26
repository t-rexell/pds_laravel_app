<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\User\UserController;
use App\Http\Controllers\Web\Client\ClientController;
use App\Http\Controllers\Web\Client\PersonalInfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\User\UserTable;
use App\Http\Controllers\Web\Client\PersonalInfoTable;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Users
    Route::name('users.')->prefix('users')->group(function () {
        Route::get('table', UserTable::class)->name('table');
    });
    Route::resource('users', UserController::class);

    // Personal Information
    Route::get('/form', function () {
        return view('personalinfo.form');
    })->name('form');

    Route::resource('personal-info', PersonalInfoController::class);

    Route::get('personal/info/table', PersonalInfoTable::class)->name('table');
});

require __DIR__ . '/auth.php';
