<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/menu', function () { return view('menu');})->name('menu');;

Route::get('/pelicula', function () { return view('pelicula');})->name('pelicula');;

Route::get('/historial', function () { return view('historial');})->name('historial');;

Route::get('/agregarPelicula', function () { return view('agregarPelicula');})->name('agregarPelicula');;

Route::get('/generos', function () { return view('generos');})->name('generos');;
