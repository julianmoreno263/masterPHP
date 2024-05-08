<?php 

require_once 'configuracion.php';


//para usar los metodos estaticos d ela clase usamos la propia clase y los ::
Configuracion::setColor("blue");
Configuracion::setEntorno("localhost");
Configuracion::setNewsletter(True);


echo Configuracion::getColor() . '<br>';
echo Configuracion::getEntorno() . '<br>';
echo Configuracion::getNewsletter() . '<br>';

//puedo tambien instanciar esta clase aunque sea estatica(pues tiene metodos estaticos) y manipular sus propiedades y verlas pero siempre usando el operador ::
$miInstancia=new Configuracion();
$miInstancia::$color='verde';
echo $miInstancia::$color;
var_dump($miInstancia)



?>