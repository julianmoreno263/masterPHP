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

    public function detalle($year=null){
        return view('pelicula/detalle');
    }

    //con redirect puedo redirigir a una ruta especifica
    public function redirigir(){
        return redirect('/detalle');
    }

    public function formulario(){
        return view('pelicula/formulario');
    }

    //con esta funcion recogemos los datos que llegan por post del formulario de laravel,debemos usar la clase Request para poder pasar un objeto de tipo Request como parametro, este objeto me permite recoger los datos que se van a enviar por post en el formulario y asi manipularlos.
    public function recibir(Request $request){

        //asi recogemos los datos por post
        $nombre=$request->input('nombre');
        $email=$request->input('email');

        return "El nombre es $nombre y el email es $email";

    }
}
