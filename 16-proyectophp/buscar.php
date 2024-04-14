
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

        if (!isset($_POST['busqueda'])) {
            # code...
            header("Location:index.php");
        }

    ?>


    <div id="contenedor">

        <!-- Sidebar -->
        <?php require_once('includes/lateral.php') ?>
            

        <!-- Contenido principal -->
        <div id="principal">

            <h1>Busqueda: <?=$_POST['busqueda']?></h1>

            <?php 

                $entradas=conseguirEntradas($db,null,null,$_POST['busqueda']); 

                if(!empty($entradas) && mysqli_num_rows($entradas)>=1):
                    while($entrada=mysqli_fetch_assoc($entradas)):
            ?>

                <article class="entrada">
                    <a href="entrada.php?id=<?=$entrada['id']?>">
                        <h2><?=$entrada['titulo']?></h2>
                        <span class="fecha"><?=$entrada['categoria'] . ' | ' . $entrada['fecha']; ?></span>
                        <p><?=substr($entrada['descripcion'],0,160) . '...'?> </p>
                    </a>
                </article>

            <?php 
                endwhile;
                else:
            ?>
            <div class="alerta">No hay entradas en esta categoria</div>
            <?php endif; ?>

        </div>

    </div>

    <!-- Pie de pagina -->
    <?php require_once('includes/pie.php') ?>

    
</body>
</html>