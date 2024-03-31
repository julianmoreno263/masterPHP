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

    <div id="principal">

        <h1>Mis datos</h1>

         <!-- mostrar errores -->
         <?php if(isset($_SESSION['completado'])):?>
            <div class="alerta alerta-exito">
                <?= $_SESSION['completado']; ?>
            </div>
        <?php  elseif(isset($_SESSION['errores']['general'])): ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['errores']['general']; ?>
            </div>
        <?php endif; ?>

        <form action="actualizarUsuario.php" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="" value="<?=$_SESSION['usuario']['nombre'];?>">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'nombre') : ''; ?>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="" value="<?=$_SESSION['usuario']['apellidos'];?>">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'apellidos') : ''; ?>

            <label for="email">Email</label>
            <input type="email" name="email" id="" value="<?=$_SESSION['usuario']['email'];?>">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'email') : ''; ?>
                
            <input type="submit" value="Actualizar" name="submit">
        </form>

        <?php borrarErrores(); ?>


    </div>


</div>

<!-- Pie de pagina -->
<?php require_once('includes/pie.php') ?>