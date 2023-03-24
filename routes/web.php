<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenerosController;
use App\Http\Controllers\PeliculasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('index'); })->name('inicio');;

// Route::get('/menu', function () { return view('menu');})->name('menu');;

Route::get('/pelicula', function () { return view('pelicula');})->name('pelicula');;

Route::get('/historial', function () { return view('historial');})->name('historial');;

Route::get('/agregarPelicula', function () { return view('agregarPelicula');})->name('agregarPelicula');;

// Route::get('/generos', function () { return view('generos');})->name('generos');

//Peliculas
Route::get('/peliculas', [PeliculasController::class, 'index'])->name('peliculas.index');
Route::get('/pelicula/{id}', [PeliculasController::class, 'pelicula'])->name('peliculas.pelicula');
Route::get('/peliculas/create', [PeliculasController::class, 'create'])->name('peliculas.create');
Route::post('/peliculas/create', [PeliculasController::class, 'store'])->name('peliculas.store');
Route::get('/peliculas/{id}/edit', [PeliculasController::class, 'edit'])->name('peliculas.edit');
Route::put('/peliculas/{id}', [PeliculasController::class, 'update'])->name('pelliculas.update');

//Generos
Route::get('/generos', [GenerosController::class, 'index'])->name('generos.index');
Route::post('/generos', [GenerosController::class, 'store'])->name('generos.store');
