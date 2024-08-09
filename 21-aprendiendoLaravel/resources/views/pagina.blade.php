{{-- EN BLADE PUEDO UTILIZAR LAYOUTS PARA TENER PLANTILLAS, LAS CUALES PUEDO UTILIZAR CUANDO NECESITE REPETIR CODIGO, PARA USARLAS LAS HEREDO CON @extends --}}

@extends('layouts/master')

@section('titulo', 'Master en PHP')

{{-- si quiero agregar contenido a lo que tengo en una plantilla,por ejemplo agregarle algo a la cabecera,utilizo @parent --}}
@section('header')
    @parent()
    <h2>Hola, esta es mi cabecera</h2>
@stop


@section('content')
<h1>Contenido de la pagina generica</h1>
@endsection


