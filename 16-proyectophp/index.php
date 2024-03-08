
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
    <?php require_once('includes/cabecera.php') ?>


    <div id="contenedor">

        <!-- Sidebar -->
        <?php require_once('includes/lateral.php') ?>
            

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
    <?php require_once('includes/pie.php') ?>

    
</body>
</html>