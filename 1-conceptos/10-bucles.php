<?php

//bucles, son estructuras de control donde se pueden repetir una o varias lineas de  codigo tantas veces segun la condicion que se establezca.Hay bucles determinados e indeterminados.En ambos casos debe de existir un codigo que haga que la condicion en un momento determinado se vuelva falsa porque si no se vuelve un bucle infinito.

//while, repite las instrucciones mientras la condicion sea cierta,no es determinado,osea no se sabe cuantas veces repetira el codigo a primera vista.
$num = 0;

while ($num <= 100) {

    echo $num;
    if ($num != 100) {

        echo ", ";
    }
    $num++;
}

echo "<hr>";
echo "<br>";

//ejemplo,capturamos el valor de una variable que pasemos en la url por $_GET y lo mostramos con var_dump(),puedo utilizar el metodo isset() para saber si esa condicion se cumple o no,osea si esta variable existe o no.Para castear un valor lo indico anteponiendo parentesis y el tipo de dato que quiero que se vuelva la variable.Despues de pasar ese numero mostraremos la tabla de multiplicar de ese numero.
if (isset($_GET["num"])) {

    $num = (int)$_GET["num"];
} else {

    $num = 1;
}

echo "<h1>Tabla de multiplicar del número $num</h1>";

$contador = 0;

while ($contador <= 10) {

    echo "$num x $contador= " . ($num * $contador) . "<br>";
    $contador++;
}

echo "<hr>";

//do-while, el codigo se ejecuta por lo menos una vez aunque la condicion de entrada sea falsa, es util cuando necesitamos que el contenido se ejecute una vez y despues comprobar algo.Por ejemplo comprobar la edad de una persona.
$edad=18;
$contador=1;
do {
    echo "Tienes acceso al servidor local privado $contador <br>";
    $contador++;
} while ($edad >=18 && $contador<=10); 
