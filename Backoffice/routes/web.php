<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CafeController;




Route::get('/', function () {
    return view('Backoffice');
});

Route::get('/Listar', [CafeController::class, 'Listar']);


    Route::get('/Agregar', function () {
        return view('agregar');
    });

Route::post('/cafes', [CafeController::class, 'Crear']);

Route::get('/cafes/{id}/eliminar', [CafeController::class, 'Eliminar']); 
Route::post('/cafes/{id}/eliminar', [CafeController::class, 'Eliminar']);

Route::get('/cafes/{id}/modificar', [CafeController::class, 'MostrarFormularioDeModificar']);
Route::post('/cafes/{id}/modificar', [CafeController::class, 'Modificar']);
