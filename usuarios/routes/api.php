<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::apiResource('users', UserController::class); Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']); // Obtener todos los usuarios
    Route::get('{id}', [UserController::class, 'show']); // Obtener un usuario específico
    Route::post('/', [UserController::class, 'store']); // Crear un usuario
    Route::put('{id}', [UserController::class, 'update']); // Actualizar un usuario
    Route::delete('{id}', [UserController::class, 'destroy']); // Eliminar un usuario
});