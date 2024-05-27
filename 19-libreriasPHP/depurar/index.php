<?php 


//vamos a ver una libreria que nos permitira usar la consola del navegador como en javascript para ir depurando el codigo php, es como los var_dump(), se llama firephp.En si esto es como usar el console.log() de javascript. Para poder usar esta libreria con la consola del navegador debemos instalar un plugin en el navegador llamado tambien firephp( en el caso de chrome).

//para usar este plugin:

//1. Dirigirse a la página oficial de Fire PHP: firephp.org

// 2. Elegir la extensión dependiendo del navegador, en mi caso es Google Chrome.

// 3. Una vez descargado la extension, actualizar la página como lo muestra en la clase.

// 4. Luego abrimos el Dev Tools (Ctrl + Shift + i) .

// 5. Esta es la parte donde se confunden las cosas, NO debe abrirse la pestaña de Console porque esta es la de Java Script, en su lugar, donde vemos las pestañas en Dev Tools (Elements, Console, Source, etc.) damos clic donde dice Fire PHP y ya lo tendriamos.

//6- despues en la configuracion de firephp habilitamos Enable UserAgent Request Header - Modifies the User-Agent request header by appending FirePHP/0.5.

// Luego de eso, observaras que en la parte derecha de Fire PHP hay un rectangulo rojo que dice Enable, das click ahi y eso seria todo.

require_once '../vendor/autoload.php';

//creo un elemento para depurar,por ejemplo un array
$frutas=array('manzanas','naranjas','sandias');
$nombres=array('ejecutiva'=>'ingrid','empleada'=>'sandra','cliente'=>'angie');

//asi uso la clase Firebug para ver en consola el elemento a depurar
\FB::log($frutas);
\FB::log($nombres);

echo 'Hola ' . $nombres['ejecutiva'];



?>