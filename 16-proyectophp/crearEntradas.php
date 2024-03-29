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
        <h1>Crear Entradas</h1>

        <p>Agrega nuevas entradas al blog para que los usuarios puedan leerlas y disfrutar de nuestro contenido</p>
        <br>

        <form action="guardarEntrada.php" method="post">
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo">
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'titulo') : ''; ?>


            <label for="descripcion">Descripcion:</label>
            <textarea type="text" name="descripcion"></textarea>
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'descripcion') : ''; ?>


            <label for="categoria">Categoria:</label>
            <select  name="categoria">
                <?php $categorias=conseguirCategorias($db);
                    if (!empty($categorias)):
                        while($categoria=mysqli_fetch_assoc($categorias)):
                 ?>
                    <option value="<?=$categoria['id']?>">
                            <?=$categoria['nombre']; ?>
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




