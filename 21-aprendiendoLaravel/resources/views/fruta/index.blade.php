
@php
    use App\Http\Controllers\FrutaController;
@endphp

<h1>Listado de frutas</h1>
<h3><a href="{{action([FrutaController::class,'create'])}}">Crear Fruta</a></h3>

@if (session('status'))
    <p style="background: green;color:white;width:280px;text-align:center">
        {{session('status')}}
    </p>
@endif

<ul>
    @foreach ($frutas as $fruta)
        <li>
            <a href="{{action([FrutaController::class,'detail'],['id'=>$fruta->id])}}">
                {{$fruta->nombre}}
            </a>

        </li>
    @endforeach
</ul>
