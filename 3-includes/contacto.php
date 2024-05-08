<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo includes</title>
</head>
<body>

<?php 
    include( "./layouts/cabecera.php");
?>

<hr>

<!-- contenido -->
<div>
    <h2>Pagina de contacto</h2>
    <p>Texto de prueba contacto</p>
</div>

<hr>

<!-- footer -->
<footer>
    Todos los derechos reservados &copy Julian Moreno web <?=date("Y")?>
</footer>


    
</body>
</html>