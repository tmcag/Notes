<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\CheckUserIsLogged;
use App\Http\Middleware\CheckUserIsNotLogged;
use Illuminate\Support\Facades\Route;

Route::middleware([CheckUserIsNotLogged::class])->group(function () {
    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/login', [AuthController::class, 'authenticate']);

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'createUser'])->name('register.create.user');
});

Route::middleware([CheckUserIsLogged::class])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/', [MainController::class, 'index'])->name('home');

    Route::get('/nota/novo', [MainController::class, 'new'])->name('new.note');
    Route::post('/nota/novo', [MainController::class, 'store'])->name('store.note');

    Route::get('/nota/{id?}', [MainController::class, 'edit'])->name('edit.note');
    Route::post('/nota/{id?}', [MainController::class, 'update'])->name('update.note');

    Route::delete('/nota/{id?}', [MainController::class, 'delete'])->name('delete.note');
});


