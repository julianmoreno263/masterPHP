<?php 

#vamos a ver como manipular archivos en php utilizando la gran variedad de funciones que tiene php para manejra archivos.

//abrir un archivo, se le indica el modo que queremos que el archivo abra,por ejemplo en modo lectura(read), si pongo el permiso "a+", permite leer y escribir en el archivo de una vez.
$archivo=fopen("texto.txt","a+");


//leer el archivo,si el archivo tiene varias lineas de texto debo utilizar un while con el metodo feof para poder mostrar todas sus lineas
while (!feof($archivo)) {
    # code...
    $contenido=fgets($archivo) . "<br>";
    echo $contenido;
}

//escribir en un archivo
fwrite($archivo,"<br>***Soy un texto metido desde php***");



//cerrar archivo
fclose($archivo);

//----------------------------------------

//para copiar un archivo utilizo copy(), me copia dentro d ela misma ruta donde esta el archivo a copiar, al actualizar el servidor(osea la pantalla del navegador) me sacara la copia.
//copy('texto.txt','copiaTexto.txt') or die('error al copiar');

//renombrar un archivo
//rename('copiaTexto.txt','nuevoNombre.txt');

//eliminar un archivo
//unlink('nuevoNombre.txt') or die('error al borrar');

//-----------------------------------------------

//comprobar si un archivo existe o no
if(file_exists('texto.txt')){
    echo 'El archivo existe';
}else{
    echo 'El archivo no existe';
}



?>