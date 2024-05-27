<?php 

//vamos a ver como manipular imagenes con la libreria phpthumb


//1- cargamos el autoload para poder utilizar la libreria
require_once '../vendor/autoload.php';

//2-capturo la imagen
$imagen='img.jpg';

//3- creo una variable para guardar mi foto modificada, le asigno un nombre
$guardada='fotoModificada.jpg';

//creo el objeto phpthumb y le paso la foto original que se modificara, puedo redimensionarla,o hacer varias cosas con los metodos del objeto thumb. Para mostrarla uso show() y para guardarla uso save() y le paso la variable donde se guardara.

//nota: si sale un error de: sizeof(): Parameter must be an array or an object that implements Countable, se debe buscar en la libreria instalada el archivo GD.php y adicionar este codigo a la funcion setOptions(): $this->options == null ||, osea queda si:                              if ($this->options == null || sizeof($this->options) == 0) 
$thumb=new PHPThumb\GD($imagen);
$thumb->resize(150,150);//con esto redimensionamos
$thumb->crop(50,50,120,120);//con esto recortamos la imagen,se le pasan 4 parametros
$thumb->show();
$thumb->save($guardada);//con esto la foto modificada se me guarda en el servidor,osea aqui.





?>