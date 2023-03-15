<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GenerosController extends Controller
{
    public function index(){
        $generos = Genero::all();
        $argumentos['generos'] = $generos;
        return view("generos", $argumentos);
    }

    public function store(Request $request) {
        $nuevoGenero = new Genero();
        $nuevoGenero->nombre = $request->input('nombre');
        
        $nuevoGenero->save();
        return redirect()->route('generos.index');
    }
}
