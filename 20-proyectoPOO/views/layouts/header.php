<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online PHP</title>

    <link rel="stylesheet" href="<?=base_url?>assets/css/style.css">
</head>
<body>

<!-- contenedor para todo el sitio web -->
<div id="container">


    <!-- cabecera -->
    <header id='header'>
        <div id="logo">
            <img src="<?=base_url?>assets/img/camiseta.png" alt="logotipo">
            <a href="<?=base_url?>">Tienda de Camisetas</a>
        </div>
    </header>

    <!-- menu -->
    <nav id="menu">
        <?php $categorias=Utils::showCategorias()?>
        <ul>
            <li><a href="<?=base_url?>">Inicio</a></li>

            <?php while($cat=$categorias->fetch_object()):?>
                <li><a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a></li>
            <?php endwhile ?>
        </ul>
    </nav>

    <!-- contenedor -->
    <div id="content">