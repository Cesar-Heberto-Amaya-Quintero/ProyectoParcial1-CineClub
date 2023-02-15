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

Route::get('/', function () {return view('index'); });

Route::get('/menu', function () { return view('menu');});

Route::get('/pelicula', function () { return view('pelicula');});

Route::get('/historial', function () { return view('historial');});

Route::get('/agregarPelicula', function () { return view('agregarPelicula');});

Route::get('/generos', function () { return view('generos');});