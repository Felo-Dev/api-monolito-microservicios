<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']); // Obtener todos los productos
    Route::get('{id}', [ProductController::class, 'show']); // Obtener un producto específico
    Route::post('/', [ProductController::class, 'store']); // Crear un producto
    Route::put('{id}', [ProductController::class, 'update']); // Actualizar un producto
    Route::delete('{id}', [ProductController::class, 'destroy']); // Eliminar un producto
});
