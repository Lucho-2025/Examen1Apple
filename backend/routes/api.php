<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\AuthController;


Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::apiResource('items', ItemController::class);

Route::apiResource('marca', MarcaController::class);

//Route::apiResource('items', ItemController::class)->middleware('auth:sanctum');

//Route::apiResource('marcas', MarcaController::class)->middleware('auth:sanctum');
