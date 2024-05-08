<?php

#vamos a trabajar con carpetas en php.

#crear carpeta, se le indican los permisos con 0777 tiene todos los permisos
if (!is_dir(('miCarpeta'))) {
    mkdir('miCarpeta', 0777) or die('No se puede crear la carpeta');
} else {
    echo 'Ya existe la carpeta';
}

//borrar carpetas
//rmdir('miCarpeta');

echo '<hr>';

//ver el contenido de una carpeta

echo '<h1>Contenido de carpeta</h1>';

if ($gestor = opendir('./miCarpeta')) {
    while (false !== ($archivo = readdir($gestor))) {
        if ($archivo != '.' & $archivo != '..') {
            echo $archivo . '<br>';
        }
    }
}
