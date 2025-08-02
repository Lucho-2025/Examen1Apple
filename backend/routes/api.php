<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\AuthController;

Route::apiResource('categorias', CategoriaController::class);

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::apiResource('items', ItemController::class)->middleware('auth:sanctum');

// Route::apiResource('productos', ProductoController::class)->middleware('auth:sanctum');