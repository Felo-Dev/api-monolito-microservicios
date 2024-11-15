<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;


Route::prefix('payments')->group(function () {
    Route::get('/', [PaymentController::class, 'index']); // Obtener todos los pagos
    Route::get('{id}', [PaymentController::class, 'show']); // Obtener un pago específico
    Route::post('/', [PaymentController::class, 'store']); // Crear un pago
    Route::put('{id}', [PaymentController::class, 'update']); // Actualizar un pago
    Route::delete('{id}', [PaymentController::class, 'destroy']); // Eliminar un pago
});
