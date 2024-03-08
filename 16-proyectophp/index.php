<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Videojuegos PHP</title>

    <link rel="stylesheet" href="./recursos-blog/assets/css/style.css">
</head>
<body>

<!-- Cabecera -->
<header id="cabecera">

    <!-- Logo -->
    <div id="logo">
        <a href="index.php">
            Blog de Videojuegos
        </a>
    </div>

    <!-- Menu -->
    <nav id="menu">
        <ul>
            <li>
                <a href="index.php">Inicio</a>
            </li>
            <li>
                <a href="index.php">Categoria 1</a>
            </li> 
            <li>
                <a href="index.php">Categoria 2</a>
            </li>
            <li>
                <a href="index.php">Categoria 3</a>
            </li>
            <li>
                <a href="index.php">Categoria 4</a>
            </li>
            <li>
                <a href="index.php">Sobre mi</a>
            </li>
            <li>
                <a href="index.php">Contacto</a>
            </li>
        </ul>
    </nav>
</header>

<div id="contenedor">

    <!-- Sidebar -->
    <aside id="sidebar">
        <div id="login" class="bloque">
            <h3>Identificate</h3>
            <form action="login.php" method="post">
                <label for="email">Email</label>
                <input type="email" name="email" id="">

                <label for="password">Password</label>
                <input type="password" name="password" id="">

                <input type="submit" value="Entrar">
            </form>
        </div>

        <div id="register" class="bloque">
            <h3>Registrate</h3>
            <form action="registro.php" method="post">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="">

                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="">

                <label for="email">Email</label>
                <input type="email" name="email" id="">

                <label for="password">Password</label>
                <input type="password" name="password" id="">

                <input type="submit" value="Registrar">
            </form>
        </div>
    </aside>

    <!-- Contenido principal -->
    <div id="principal">
        <h1>Ultimas Entradas</h1>

        <article class="entrada">
            <h2>Titulo de mi entrada</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis volutpat sem rutrum volutpat cursus. </p>
        </article>

        <article class="entrada">
            <h2>Titulo de mi entrada</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis volutpat sem rutrum volutpat cursus. </p>
        </article>

        <article class="entrada">
            <h2>Titulo de mi entrada</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis volutpat sem rutrum volutpat cursus. </p>
        </article>
    </div>

</div>

<!-- Pie de pagina -->
<footer id="pie">
    <p>Desarrollado por Julian Moreno &copy;2024</p>
</footer>
    
</body>
</html>