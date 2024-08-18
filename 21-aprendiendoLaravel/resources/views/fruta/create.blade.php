@php
    use App\Http\Controllers\FrutaController;
@endphp

<h1>Crear fruta</h1>

<form action="{{action([FrutaController::class,'save'])}}" method="post">

    @csrf

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="">
    <br><br>
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" id="">
    <br><br>
    <label for="precio">Precio</label>
    <input type="text" name="precio" id="">
    <br><br>
    <label for="fecha">Fecha</label>
    <input type="date" name="fecha" id="">
    <br><br>
    <input type="submit" value="Guardar">
</form>

<h3><a href="{{action([FrutaController::class,'index'])}}">Ver listado</a></h3>

