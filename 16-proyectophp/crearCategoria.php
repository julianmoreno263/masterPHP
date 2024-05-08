<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Videojuegos PHP</title>

    <link rel="stylesheet" href="./recursos-blog/assets/css/style.css">
</head>

<?php require_once('includes/redireccion.php'); ?>
<?php require_once('includes/cabecera.php'); ?>

<div id="contenedor">
    <?php require_once('includes/lateral.php'); ?>

    <!-- Contenido principal -->
    <div id="principal">
        <h1>Crear Categorias</h1>

        <p>Agrega nuevas categorias al blog para que los usuarios puedan usarlas al crear sus entradas</p>
        <br>

        <form action="guardarCategoria.php" method="post">
            <label for="nombre">Nombre de la categoria:</label>
            <input type="text" name="nombre">

            <input type="submit" value="Guardar">
        </form>

    </div>

    
</div>

<!-- Pie de pagina -->
<?php require_once('includes/pie.php') ?>




