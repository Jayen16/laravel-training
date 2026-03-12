<?php

use App\Classes\ChallengeGenerator;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::resource('games', GameController::class)->except([
    'edit'
])->parameter('games', 'id')
->middleware('auth');

Route::get('/registration', [\App\Http\Controllers\RegistrationController::class, 'show'])->middleware('guest')->name('registration.show');
Route::post('/registration', [\App\Http\Controllers\RegistrationController::class, 'save'])->middleware('guest')->name('registration.save');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'show'])->name('login.index');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login.store');
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
=======
Route::middleware('guest')->group(function (){
    Route::name('registration.')->group(function () {
        Route::get('/registration', [RegistrationController::class,'show'])->name('show');
        Route::post('/registration', [RegistrationController::class,'save'])->name('save');    
    });

    Route::get('/', [AuthController::class, 'show'])->name('login');
    Route::post('/', [AuthController::class, 'login'])->name('auth.login');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
        
    Route::resource('games', GameController::class)->except([
        'edit'
    ]);
});
>>>>>>> 2610de7a3d3e55be173d03c2915e944cd42f5dd7
