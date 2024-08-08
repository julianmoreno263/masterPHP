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

//ruta con parametros y con condiciones,puedo tener rutas con condiciones,por ejemplo puedo poner una condicion de que el parametro titulo sea un texto en minusculas,si le paso mayusculas no funcionara,o si le paso numeros tampoco
Route::get('/pelicula2/{titulo}', function ($titulo) {
    return view('pelicula2',[
        'titulo'=>$titulo
    ]);
})->where([
    'titulo'=>'[a-z]+'
]);


//si en esta ruta no quiero pasar el $titulo dentro de un array, lo puedo pasar con el metodo with(), y puedo encadenar varios with para pasar parametros.
Route::get('/listadoPeliculas', function () {
    $titulo="Listado de peliculas";
    $listado=['Batman','Spiderman','Gran Torino'];

    return view('peliculas/listado')
            ->with('titulo',$titulo)
            ->with('listado',$listado);
});
