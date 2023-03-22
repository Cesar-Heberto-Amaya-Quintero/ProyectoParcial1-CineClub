<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use App\Models\Genero;
use App\Models\GeneroPelicula;

class PeliculasController extends Controller
{
    public function index(){
        $peliculas = Pelicula::all();
        $argumentos['peliculas'] = $peliculas;
        return view("menu", $argumentos);
    }

    public function pelicula($id){
        $pelicula = Pelicula::find($id);
        $generosPelicula = GeneroPelicula::where('id_pelicula', $id)->pluck('id_genero');
        $pelicula->generos = "";
        foreach($generosPelicula as $generoPelicula)
        {
            $genero = Genero::find($generoPelicula);
            $pelicula->generos .= $genero->nombre . ", ";
        }
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

        $generos = $request->input('generos');
        foreach ($generos as $genero)
        {
            
            $nuevoGeneroPelicula = new GeneroPelicula();
            $nuevoGeneroPelicula->id_genero = $genero;
            $nuevoGeneroPelicula->id_pelicula = $nuevaPelicula->id;

            $nuevoGeneroPelicula->save();
        }

        return redirect()->route('peliculas.index');
    }
}
