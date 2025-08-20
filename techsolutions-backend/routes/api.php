<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ConviteController;
use App\Http\Controllers\Api\ColaboradorController;

Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('convites', ConviteController::class);
    Route::get('colaboradores/export', [ColaboradorController::class, 'export']);
    Route::put('colaboradores/{id}/perfil', [ColaboradorController::class, 'alterarPerfil']);
    Route::apiResource('colaboradores', ColaboradorController::class)->only(['index', 'show']);
});
