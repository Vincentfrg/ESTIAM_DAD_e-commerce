<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum', 'admin'])
    ->group(function () {
        Route::get('/user', [AuthController::class, 'getUser']);
        Route::post('/logout', [AuthController::class, 'logout']);

        Route::apiResource('products', ProductController::class);
        Route::apiResource('users', UserController::class);
    });

Route::post('/login', [AuthController::class, 'login']);
