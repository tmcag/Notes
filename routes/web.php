<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Auth Routes
Route::get('/login', [ AuthController::class, 'login' ]);
Route::get('/logout', [ AuthController::class, 'logout' ]);

Route::post('/auth', [ AuthController::class, 'auth' ]);