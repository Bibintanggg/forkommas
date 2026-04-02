<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\MasjidController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\ProgramController;

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

Route::prefix('facilities')->group(function () {
    Route::post('/', [FacilityController::class, 'store']);
    Route::put('/{id}', [FacilityController::class, 'update']); 
    Route::delete('/{id}', [FacilityController::class, 'destroy']);
});

Route::prefix('gallery')->group(function () {
    Route::post('/', [GalleryController::class, 'store']);
    Route::put('/{id}', [GalleryController::class, 'update']);
    Route::delete('/{id}', [GalleryController::class, 'destroy']);
});

Route::prefix('member')->group(function () {
    Route::post('/', [MemberController::class, 'store']);
    Route::put('/{id}', [MemberController::class, 'update']);
    Route::delete('/{id}', [MemberController::class, 'destroy']);
});

Route::prefix('program')->group(function () {
    Route::post('/', [ProgramController::class, 'store']);
    Route::put('/{id}', [ProgramController::class, 'update']);
    Route::delete('/{id}', [ProgramController::class, 'destroy']);
});