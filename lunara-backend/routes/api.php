<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\LapanganController;
use Illuminate\Support\Facades\Route;

// Rute untuk BE 1 (Autentikasi)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Rute untuk BE 2 (Lapangan)
Route::get('/lapangan', [LapanganController::class, 'index']);
Route::get('/lapangan/{id}', [LapanganController::class, 'show']);