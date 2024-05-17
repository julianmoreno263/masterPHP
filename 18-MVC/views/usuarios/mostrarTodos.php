

<h1>Listado de usuarios</h1>

<?php while($usuario=$todosLosUsuarios->fetch_object()): ?>
    Nombre: <?=$usuario->nombre ; ?> 
    Email: <?=$usuario->email ; ?> 
    <br>
<?php endwhile; ?>