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

    public function create(){
        $generos = Genero::all();
        $argumentos['generos'] = $generos;
        return view("agregarPelicula", $argumentos);
    }

    public function store(Request $request){

        $nuevaPelicula = new Pelicula();
        
        $nuevaPelicula->titulo = $request->input('titulo');
        $nuevaPelicula->director = $request->input('director');
        $nuevaPelicula->ano = $request->input('ano');
        $nuevaPelicula->descripcion = $request->input('descripcion');
        $nuevaPelicula->duracion_minutos = 100;

        if($request->hasFile('poster')){
            $path = $request->file('poster')->store('public/posters');
            $nuevaPelicula->poster = $request->file('poster')->hashName();
        }

        $nuevaPelicula->save();

        return redirect()->route('peliculas.index');
    }
}
