<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online PHP</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


<!-- cabecera -->
<header id='header'>
    <div id="logo">
        <img src="assets/img/camiseta.png" alt="logotipo">
        <a href="index.php">Tienda de Camisetas</a>
    </div>
</header>

<!-- menu -->
<nav id="menu">
    <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Categoria 1</a></li>
        <li><a href="#">Categoria 2</a></li>
        <li><a href="#">Categoria 3</a></li>
        <li><a href="#">Categoria 4</a></li>
        <li><a href="#">Categoria 5</a></li>
    </ul>
</nav>

<!-- contenedor -->
<div id="content">

<!-- barra lateral -->
<aside id="lateral">

    <div id="login" class="block_aside">
        <form action="#" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="">

            <input type="submit" value="Enviar">
        </form>

        <a href="#">Mis Pedidos</a>
        <a href="#">Gestionar Pedidos</a>
        <a href="#">Gestionar Categorías</a>

    </div>

</aside>

<!-- contenido central -->
<div id="central">
    <div class="product">
        <img src="assets/img/camiseta.png" alt="imagen camiseta">
        <h2>Camiseta Azul Ancha</h2>
        <p>30 euros</p>
        <a href="#">Comprar</a>
    </div>

    <div class="product">
        <img src="assets/img/camiseta.png" alt="imagen camiseta">
        <h2>Camiseta Azul Ancha</h2>
        <p>30 euros</p>
        <a href="#">Comprar</a>
    </div>

    <div class="product">
        <img src="assets/img/camiseta.png" alt="imagen camiseta">
        <h2>Camiseta Azul Ancha</h2>
        <p>30 euros</p>
        <a href="#">Comprar</a>
    </div>
</div>


</div>

<!-- footer -->
<footer id="footer">
    <p>Desarrollado por Julian Moreno &copy <?=date('Y'); ?></p>
</footer>
    
</body>
</html>