<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EventController;

Route::prefix('events')->group(function () {
    Route::post('/', [EventController::class, 'store']);
    Route::put('/{id}', [EventController::class, 'update']);
    Route::delete('/{id}', [EventController::class, 'destroy']);
});
