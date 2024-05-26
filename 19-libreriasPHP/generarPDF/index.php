<?php 


//en este modulo veremos como instalar librerias con composer y como usarlas en nuestros proyectos php.Esta libreria convierte archivos html a pdf.

//el composer lo instalamos en el pc globalmente y las librerias las instalamos en la carpeta donde vayamos a usarlas,entonces debemos pararnos en la carpeta correspondiente en consola.Cuando instalamos una libreria con composer, esta nos aparece registrada en el archivo de composer.json que se crea al instalar composer.

//podemos encontrar librerias de php en el sitio web de packagist en esta url https://packagist.org/


require '../vendor/autoload.php';

//asi llamamos a la libreria
use Spipu\Html2Pdf\Html2Pdf;

//creamos un codigo html
// $html="<h1 style='background:red'>Hola mundo desde una libreria php para hacer pdfs</h1>";
// $html.="<p style='background:orange; color:white'>Master en php por Julian Moreno</p>";

//tambien podemos tomar un codigo html externo para convertirlo a pdf, para eso hacemos:

ob_start();//captura el html que tengamos
require_once 'pdfParaGenerar.php';//cargamos el archivo donde esta el codigo html
$html=ob_get_clean();//guardamos el html en la variable

//creamos un objeto de la clase Html2Pdf
$html2Pdf=new Html2Pdf();

//uso un metodo de esa clase para cargar mi html y con output() lo paso a pdf poniendole un nombre de archivo con extension .pdf, asi cuando yo abra esta pagina en el navegador me sale un pdf automaticamente.Si modifico el html y actualizo la pagina me sale el pdf actualizado.
$html2Pdf->writeHTML($html);
$html2Pdf->output('pdfGenerado.pdf');


?>