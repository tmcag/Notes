<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;

use App\Http\Middleware\CheckIfUserIsLogged;
use App\Http\Middleware\CheckIfUserIsNotLogged;

use Illuminate\Support\Facades\Route;

Route::middleware([ CheckIfUserIsNotLogged::class])->group(function () {
    Route::get('/login', [ AuthController::class, 'login' ]);
    Route::post('/login', [ AuthController::class, 'auth' ]);
});

Route::middleware([ CheckIfUserIsLogged::class ])->group(function () {
    Route::get('/', [ MainController::class, 'index' ])->name('notes');
    Route::get('/newRoute', [ MainController::class, 'newRoute' ])->name('new');
    Route::get('/logout', [ AuthController::class, 'logout' ])->name('logout');
});



