<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//ruta simple
Route::get('/', function () {
    echo "<h1>Hola mundo</h1>";
});

//ruta que muestra una vista a la que se le pueden enviar parametros por view
Route::get('/mostrarFecha', function () {
    $titulo='Estoy mostrando la fecha';
    return view('mostrarFecha',[
        'titulo'=>$titulo
    ]);
});

//ruta con parametros dentro {}, si el parametro es opcional le pongo un signo ?
Route::get('/pelicula/{titulo?}', function ($titulo='El titulo es opcional') {
    return view('pelicula',[
        'titulo'=>$titulo
    ]);
});
