<?php

namespace App\Http\Controllers;
use App\Models\Cafe;

use Illuminate\Http\Request;

class CafeController extends Controller
{
    public function Crear(Request $request){
        $cafe = new Cafe();
        $cafe->Autor = $request->post('Autor');
        $cafe->Titulo = $request->post('Titulo');
        $cafe->Contenido = $request->post('Contenido');
        $cafe->save();
    }
    public function ListarTodas(Request $request){
        return Cafe::all();
    }


}
