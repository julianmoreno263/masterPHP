<?php 

#variables globales son las que se declaran fuera de una funcion y pueden ser usadas dentro y fuera de las funciones,pero para utilizarla dentro de una funcion debo indicar que esa variable es global poniendo la palabra "global" antes del nombre de la variable. Variables locales son las que se declaran dentro de una funcion y no pueden ser usadas por fuera de esa funcion,la unica forma de usarla fuera de la funcion seria retornandola y la podriamos usar fuera.


#variable global
$frase="Esta es mi variable global";

echo $frase . "<br>";

function miFrase(){
    global $frase;

    $otraFrase="Esta es una variable local";

    echo "<h2>$frase llamada desde mi funcion</h2>";
    echo "<h2>$otraFrase creada dentro de la función</h2>";

    return $otraFrase;
}

miFrase();

// echo $otraFrase;#aqui falla si la intento invocar pues es una variable local

echo "<hr>";


//funciones variables, o function expresion,es cuando a una variable le asignamos una funcion.
function buenosDias(){
    echo "Buenos dias <br>";
}

function buenasTardes(){
    echo "Buenas tardes <br>";
}

function buenasNoches(){
    echo "Buenas noches, a dormir <br>";
}

$dia=buenosDias();
$tarde=buenasTardes();
$noche=buenasNoches();

echo $dia;
echo $tarde;
echo $noche;

echo "<hr>";







?>