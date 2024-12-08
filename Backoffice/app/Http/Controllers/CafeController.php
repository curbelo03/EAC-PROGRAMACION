<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;

class CafeController extends Controller
{
    public function Crear(Request $request)
    {
        $cafe = new Cafe();
        $cafe->Titulo = $request->post("Titulo");
        $cafe->Autor = $request->post("Autor");
        $cafe->Contenido = $request->post("Contenido");

        $cafe->save();

        return redirect('/Agregar')
            ->with('resultado', true)
            ->with('mensaje', 'Café Creado');
    }

    public function Listar()
    {
        $cafes = Cafe::all();
        return view("listar", ["cafes" => $cafes]);
    }

    public function Eliminar(Request $request, $id)
    {
        $cafe = Cafe::find($id);
        $cafe->delete();
        return redirect("/Listar")
            ->with('eliminado', true);
    }

    public function MostrarFormularioDeModificar(Request $request, $id)
    {
        $cafe = Cafe::find($id);
        return view("modificar", ["cafe" => $cafe]);
    }

    public function Modificar(Request $request){
        $cafes = cafe::find($request -> post("id"));
        var_dump($cafes);die();
        $cafe -> Autor = $request -> post("Autor");
        $cafe -> Titulo = $request -> post("Titulo");
        $cafe -> Contenido = $request -> post("Contenido");

        $cafe -> save();
        return redirect("/Listar")
            ->with('modificado',true);


    }
}
