<?php

#aqui capturamos el archivo que viene del formulario y lo enviamos a la ubicacion que queramos, en este casos era a una carpeta img
$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if ($tipo == 'image/jpeg' || $tipo == 'image/jpg' || $tipo == 'image/png' || $tipo == 'image/gif') {
    if (!is_dir('img')) {
        mkdir('img', 0777);
    }
    //subimos archivo a la carpeta img, se debe subir el string del nombre temporal,porque la variable $archivo captura todo el array con los datos del archivo,solo se debe subir la propiedad tmp_name.
    move_uploaded_file($archivo['tmp_name'], 'img/' . $nombre);

    header('refresh:5, URL=index.php');
    echo '<h1>Archivo subido correctamente</h1>';
} else {
    //redireccion despues de 5 segundos
    header('refresh:5, URL=index.php');
    echo 'Sube una imagen con un formato correcto...';
}




// var_dump($archivo);
// die();
