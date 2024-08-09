{{-- puedo incluir una vista dentro de otra en blade utilizando include --}}
@include('includes/header')


{{-- asi imprimimos variables o parametros en blade, con dobles {{}} --}}
<h1>{{$titulo}}</h1>
<h2>{{$listado[2]}}</h2>

{{-- esto es un comentario en blade de laravel --}}

{{-- para validar si hay una variable,osea como un if o un ternario, lo puedo hacer mas sencillo en blade asi, con el operador ?? --}}
{{$miVariable ?? 'No se encuentra la variable'}}

<br>

{{-- CONDICIONALES EN VISTAS BLADE --}}
@if ($titulo && count($listado)>=5)
    <h2>El titulo es:  {{$titulo}} y es mayor a 5</h2>
@elseif($titulo)
    <h2>El titulo existe, y el listado no es mayor a 5</h2>
@else
    <h2>El titulo no existe</h2>
@endif

{{-- BUCLES EN VISTAS BLADE, FOR --}}
@for ($i = 1; $i <=20; $i++)
    El numero es {{$i}}  <br>
@endfor

<hr>
{{-- WHILE --}}
<?php $contador=1 ?>

@while ($contador<=20)
    @if ($contador%2==0)
        NUMERO PAR: {{$contador}} <br>
    @endif
    <?php $contador++ ?>
@endwhile

<hr>

{{-- FOREACH --}}
@foreach ($listado as $pelicula)
    <p>{{$pelicula}}</p>
@endforeach


@include('includes/footer')



