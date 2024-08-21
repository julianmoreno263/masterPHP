@php
    use App\Http\Controllers\FrutaController;
@endphp

@if (isset($fruta) && is_object($fruta))
    <h1>Editar fruta</h1>
@else
    <h1>Crear fruta</h1>
@endif

<form action="{{ isset($fruta) ? action([FrutaController::class,'update']) : action([FrutaController::class,'save'])}}" method="post">

    @if (isset($fruta) && is_object($fruta))
        <input type="hidden" name="id" id="" value="{{$fruta->id}}"/>
    @endif

    @csrf

    <span for="nombre">Nombre</span>
    <input type="text" name="nombre" id="" value="{{$fruta->nombre ?? ''}}"/>
    <br><br>
    <span for="descripcion">Descripcion</span>
    <input type="text" name="descripcion" id="" value="{{$fruta->descripcion ?? '' }}">
    <br><br>
    <span for="precio">Precio</span>
    <input type="text" name="precio" id="" value="{{$fruta->precio ?? 0 }}">
    <br><br>
    <span for="fecha">Fecha</span>
    <input type="date" name="fecha" id="" value="{{$fruta->fecha ?? '' }}">
    <br><br>
    <input type="submit" value="Guardar">
</form>

<h3><a href="{{action([FrutaController::class,'index'])}}">Ver listado</a></h3>

