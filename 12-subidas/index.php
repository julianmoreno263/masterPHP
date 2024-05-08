<?php

#vamos a ver como subir archivos al servidor con php,para hacer esto debemos tener un formulario y un campo de tipo file, tambien tenerlo configurado con un enctype="multipart/form-data" y utilizar la variable superglobal $_FILE para recoger esos archivos desde el formulario y guardarlos en el equipo.

#entonces, aqui creamos el formulario con sus propiedades,y este enviara los archivos a otro archivo php que sera el encargado de capturar el archivo enviado del formulario y guardarlo en el servidor,pero antes debemos ir a wamp en php y en upload_max_filesize debemos establecer un tamaño maximo de archivos para que los deje guardar el servidor, por defecto esta en 2M, tambien el post_max_size,que es el tamaño maximo de informacion  que puedo enviar via post por el formulario,por defecto esta en 8M.

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBIR ARCHIVOS</title>
</head>

<body>

    <h1>Subir archivos con PHP</h1>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo" id="">
        <input type="submit" value="Enviar">
    </form>


    <h1>Listado de imagenes</h1>
    <?php

    $gestor = opendir('./img');

    if ($gestor) {
        while (($image = readdir($gestor)) !== false) {
            if ($image != '.' & $image != '..') {
                echo "<img src='img/$image' width='200px'/> <br>";
            }
        }
    }


    ?>

</body>

</html>