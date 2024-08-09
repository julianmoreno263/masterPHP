<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titulo - @yield('titulo')</title>
</head>
<body>

    @section('header')
        <h1>CABECERA DE LA WEB (master)</h1>
    @show

    <hr>

    {{-- el yield permite poner contenido dinamico, si pasamos una variable,y cambiamos el contenido de la variable,se mostrara dinamicamente --}}
    <div class="container">
        @yield('content')
    </div>

    <hr>

    @section('footer')
        <h2>PIE DE PAGINA DE LA WEB (master)</h2>
    @show

</body>
</html>
