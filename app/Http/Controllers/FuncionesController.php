<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcion;
use App\Models\Pelicula;

class FuncionesController extends Controller
{
    public function index(){
        $funciones = Funcion::all();
        $peliculas = Pelicula::all();
        // foreach ($funciones as $funcion)
        // {
        //     $pelicula = Pelicula::where('id', $funcion->id_pelicula)->get();
        //     $funciones->pelicula = $pelicula;
        // }
        $argumentos['funciones'] = $funciones;
        $argumentos['peliculas'] = $peliculas;
        return view("historial", $argumentos);
    }
    
    public function store(Request $request, $id){

        $nuevaFuncion = new Funcion();
        
        $nuevaFuncion->sala = $request->input('sala');
        $nuevaFuncion->hora = $request->input('hora');
        $nuevaFuncion->fecha = $request->input('fecha');

        $nuevaFuncion->id_pelicula = $id;
        $nuevaFuncion->id_usuario = 1;


        $nuevaFuncion->save();

        return redirect()->route('peliculas.index')->with('exito', "Se creó la función exitosamente");
    }

    public function edit($id) {
        $funcion = Funcion::find($id);
        $pelicula = Pelicula::find($funcion->id_pelicula);
        
        $argumentos['funcion'] = $funcion;
        $argumentos['pelicula'] = $pelicula;
        return view('editarFuncion', $argumentos);
    }
}
