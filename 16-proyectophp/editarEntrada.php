
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
    <?php require_once('includes/redireccion.php'); ?>
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
            <h1>Editar Entrada</h1>

            <p style="font-weight:bold">Edita tu entrada <?=$entrada_actual['titulo']; ?></p>
            <br>

            <form action="guardarEntrada.php?editar=<?=$entrada_actual['id']?>" method="post">
                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo" value="<?=$entrada_actual['titulo']; ?>">
                <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'titulo') : ''; ?>


                <label for="descripcion">Descripcion:</label>
                <textarea type="text" name="descripcion"><?=$entrada_actual['descripcion']; ?></textarea>
                <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'descripcion') : ''; ?>


                <label for="categoria">Categoria:</label>
                <select  name="categoria">
                    <?php $categorias=conseguirCategorias($db);
                        if (!empty($categorias)):
                            while($categoria=mysqli_fetch_assoc($categorias)):
                    ?>
                        <option value="<?=$categoria['id']?>"
                            <?=($categoria['id']==$entrada_actual['categoria_id']) ? "selected='selected'" : '' ?>>
                            <?=$categoria['nombre']?>
                        </option>
                    <?php 
                        endwhile;
                        endif;
                    ?>
                </select>
                <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'categoria') : ''; ?>


                <input type="submit" value="Guardar">
            </form>

            <?php borrarErrores(); ?>

        </div>

    </div>

    <!-- Pie de pagina -->
    <?php require_once('includes/pie.php') ?>

    
</body>
</html>