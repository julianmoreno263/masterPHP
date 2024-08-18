<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutaController extends Controller
{

    //funcion que mostrara el listado de las frutas de la tabla frutas, se pueden utilizar clausulas de sql como order by,etc.
    public function index(){
        $frutas=DB::table('frutas')->orderBy('id','desc')->get();


        return view('fruta/index',[
            'frutas'=>$frutas
        ]);
    }


    //funcion que mostrara el detalle de una fruta en especifico,usamos el metodo where para la condicion,debo pasarle un indice especifico.El where recibe 3 parametros, el id,el operador que voy a usar en este caso el =, y el dato a evaluar en el where que sera el dato que me llegue por parametro.Los parametros del where se los debo pasar por la ruta.
    public function detail($id){

        $fruta=DB::table('frutas')->where('id','=',$id)->first();

        return view('fruta/detail',[
            'fruta'=>$fruta
        ]);
    }

    //funcion para mostrar el formulario para crear nuevas frutas
    public function create(){
        return view('fruta/create');
    }

    //guardar el registro
    public function save(Request $request){

        $fruta=DB::table('frutas')->insert([
            'nombre'=>$request->input('nombre'),
            'descripcion'=>$request->input('descripcion'),
            'precio'=>$request->input('precio'),
            'fecha'=>$request->input('fecha'),
        ]);

        return redirect('frutas/index');

    }
}


