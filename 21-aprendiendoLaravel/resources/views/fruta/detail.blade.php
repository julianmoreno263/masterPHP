@php
    use App\Http\Controllers\FrutaController;
@endphp

<h1>Detalle de la fruta {{$fruta->nombre}}</h1>

<p>
    {{$fruta->descripcion}}
</p>

<a href="{{action([FrutaController::class,'delete'],['id'=>$fruta->id])}}">
    Eliminar
</a>
<br>
<a href="{{action([FrutaController::class,'edit'],['id'=>$fruta->id])}}">
    Actualizar
</a>

