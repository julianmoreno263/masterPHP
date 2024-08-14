<h1>Formulario en Laravel</h1>

<form action="/recibir" method="post">


    {{-- la directiva @csrf lo que hace es proteger al formulario de ataques de tipo "falsificación de solicitud entre sitios", o conocidos como "ataque de un clic o robo de sesión y abreviada como CSRF",Un ataque de falsificación de petición en sitios cruzados, también conocido como ataque CSRF, engaña a un usuario autenticado para que realice acciones no deseadas mediante el envío de peticiones maliciosas sin que se dé cuenta. --}}
    @csrf

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
    <br><br>
    <label for="email">Email</label>
    <input type="email" name="email">
    <br><br>
    <input type="submit" value="Enviar">

</form>
