
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
            <h1>Todas las Entradas</h1>

            <?php 
                $entradas=conseguirEntradas($db,null);
                if(!empty($entradas)):
                    while($entrada=mysqli_fetch_assoc($entradas)):
            ?>

                <article class="entrada">
                    <a href="">
                        <h2><?=$entrada['titulo']?></h2>
                        <span class="fecha"><?=$entrada['categoria'] . ' | ' . $entrada['fecha']; ?></span>
                        <p><?=substr($entrada['descripcion'],0,160) . '...'?> </p>
                    </a>
                </article>

            <?php 
                    endwhile;
                endif;
            ?>

        </div>

    </div>

    <!-- Pie de pagina -->
    <?php require_once('includes/pie.php') ?>

    
</body>
</html>