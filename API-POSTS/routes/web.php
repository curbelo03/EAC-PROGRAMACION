<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CafeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cafes', [CafeController::class, 'ListarTodas']);
