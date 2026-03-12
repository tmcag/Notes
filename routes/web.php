<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    echo "About Page";
});

Route::get('/controller/{id}', [ MainController::class, 'index' ]);