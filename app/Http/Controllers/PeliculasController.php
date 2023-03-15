<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use App\Models\Genero;

class PeliculasController extends Controller
{
    public function index(){
        $peliculas = Pelicula::all();
        $argumentos['peliculas'] = $peliculas;
        return view("menu", $argumentos);
    }

    public function pelicula($id){
        $pelicula = Pelicula::find($id);
        $argumentos['pelicula'] = $pelicula;
        return view("pelicula", $argumentos);
    }
}
