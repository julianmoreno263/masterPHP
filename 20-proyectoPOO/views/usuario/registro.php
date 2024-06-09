<h1>Registrarse</h1>

<?php if(isset($_SESSION['register']) && $_SESSION['register']):?>
    <strong>Registro Exitoso!</strong>
<?php else:?>
    <strong>Registro Fallido!</strong>
<?php endif; ?>

<form action="<?=base_url?>usuario/save" method="post">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="" required>

    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" id="" required>

    <label for="email">Email</label>
    <input type="text" name="email" id="" required>

    <label for="password">Password</label>
    <input type="password" name="password" id="" required>

    <input type="submit" value="Registrarse">

</form>