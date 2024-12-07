<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CafeController;

Route::get('/cafe', [CafeController::class, 'ListarTodas']);
Route::post('/cafe', [CafeController::class, 'Crear']);
