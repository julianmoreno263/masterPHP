<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index($pagina=1){

        $titulo='Listado de peliculas';

        return view('pelicula/index',[
            'titulo'=>$titulo,
            'pagina'=>$pagina
        ]);
    }

    public function detalle(){
        return view('pelicula/detalle');
    }

    //con redirect puedo redirigir a una ruta especifica
    public function redirigir(){
        return redirect('/detalle');
    }
}
