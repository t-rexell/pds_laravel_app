<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\User\UserController;
use App\Http\Controllers\Web\Client\ClientController;
use App\Http\Controllers\Web\Client\PersonalInfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\User\UserTable;

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

    Route::name('users.')->prefix('users')->group(function () {
        Route::get('table', UserTable::class)->name('table');
    });

    Route::resource('users', UserController::class);
    Route::get('/form', function () {
        return view('client.form');
    })->name('forms');

    Route::resource('clients', PersonalInfoController::class);

});

require __DIR__ . '/auth.php';
