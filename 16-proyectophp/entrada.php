
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

    <?php require_once('includes/helpers.php') ?>

    <?php 
        $entrada_actual=conseguirEntrada($db,$_GET['id']); 

        if (!isset($entrada_actual['id'])) {
            # code...
            header("Location:index.php");
        }
    ?>


    <div id="contenedor">

        <!-- Sidebar -->
        <?php require_once('includes/lateral.php') ?>
            

        <!-- Contenido principal -->
        <div id="principal">

            <h1><?=$entrada_actual['titulo']?></h1>

            <a href="categoria.php?id=<?=$entrada_actual['categoria_id']?>">
                <h2><?=$entrada_actual['categoria']?></h2>
            </a>
            
            <h4><?=$entrada_actual['fecha']?></h4>
            <p><?=$entrada_actual['descripcion']?></p>
            
        </div>

    </div>

    <!-- Pie de pagina -->
    <?php require_once('includes/pie.php') ?>

    
</body>
</html>