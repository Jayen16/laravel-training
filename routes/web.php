<?php

use App\Classes\ChallengeGenerator;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::resource('games', GameController::class)->except([
    'edit'
])->parameter('games', 'id')
->middleware('auth');

Route::get('/registration', [\App\Http\Controllers\RegistrationController::class, 'show'])->middleware('guest')->name('registration.show');
Route::post('/registration', [\App\Http\Controllers\RegistrationController::class, 'save'])->middleware('guest')->name('registration.save');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'show'])->name('login.index');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login.store');
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');