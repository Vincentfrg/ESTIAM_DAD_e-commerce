<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum', 'admin'])
    ->group(function () {
        Route::get('/user', [\App\Http\Controllers\AuthController::class, 'getUser']);
        Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);
    });

Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
