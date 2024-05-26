<?php 

//vamos a ver como crear paginacion utilizando la libreria zebra_pagination la cual se encuentra en la pagina de packagist, cuando la buscamos nos aparece el comando para instalarla por consola con composer: composer require stefangabos/zebra_pagination

//primero se carga el archivo autoload que esta en la carpeta vendor que se crea cuando instalamos composer, este archivo nos permite importar las librerias en el archivo donde las estamos necesitando, y en el caso de esta libreria se debe hacer otro require para llamar a la libreria como tal, en la documentacion de cada libreria se ve como usarlas.

//para hacer un ejercicio de paginacion vamos a hacer una consulta a la bd que trabajamos cuando vimos MVC consultando la tabla de notas.

require_once '../vendor/autoload.php';
require '../vendor/stefangabos/zebra_pagination/Zebra_Pagination.php';

//conexion a bd
$conexion=new mysqli('localhost','root','','notasMaster');
$conexion->query("set names 'utf8'");

//consulta a la bd
$sql=$conexion->query("select * from notas");
$numeroElementos=$sql->num_rows;
$numeroElementosPagina=2;

//paginacion utilizando la libreria, se crea una instancia de esa clase, en si las librerias son clases de php con sus metodos, le indico el numero total de elementos a paginar.
$pagination=new zebra_pagination();
$pagination->records($numeroElementos);

//especificar numero de elementos por pagina
$pagination->records_per_page($numeroElementosPagina);

//consulta definitiva a la bd, se establece un limite para que quede bien la paginacion, la primera parte del limite se interpreta como "desde" y la otra es "hasta".
$page=$pagination->get_page();
$empiezaAqui=(($page-1)*$numeroElementosPagina);
$sql="select * from notas LIMIT $empiezaAqui,$numeroElementosPagina";            
$notas=$conexion->query($sql);


//esta es una hoja de estilos que tenemos de ejemplo cuando instalamos la libreria zebra_pagination, es para que los enlaces de paginacion se vean mejor.
 echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';

while ($nota=$notas->fetch_object()) {
    echo "<h1>{$nota->titulo}</h1><br>";
    echo "<h3>{$nota->descripcion}</h3><hr>";
}

//links para las paginas
$pagination->render();


?>