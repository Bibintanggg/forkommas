<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\MasjidController;

Route::prefix('events')->group(function () {
    Route::post('/', [EventController::class, 'store']);
    Route::put('/{id}', [EventController::class, 'update']);
    Route::delete('/{id}', [EventController::class, 'destroy']);
});

Route::prefix('masjid')->group(function () {
    Route::post('/', [MasjidController::class, 'store']);
    Route::put('/{id}', [MasjidController::class, 'update']);
    Route::delete('/{id}', [MasjidController::class, 'destroy']);
});
