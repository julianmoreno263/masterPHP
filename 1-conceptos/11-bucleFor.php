<?php 

//el bucle for es un bucle determinado, podemos saber cuantas vueltas va a tener solo mirando el codigo.Dentro de sus parentesis se pone la variable contadora,la condicion y el incremento de esa variable contadora.

//vamos a sumar los numeros del 1 al 100 y mostrar ese resultado
$resultado=0;
for ($i=0; $i <=100; $i++) { 
    $resultado=$resultado+$i;
}

echo "<h1>El resultado es: $resultado</h1>";

echo "<br>";

//sacar la tabla de multiplicar de un numero.La instruccion break nos sirve para romper la ejecucion del bucle en un punto determinado que nosotros queramos,por ejemplo que se termine el bucle cuando el resultado sea 28.
$num=4;
for ($i=0; $i <=10 ; $i++) { 
    $resultado=($num * $i);
    if ($resultado==28) {
        echo "Hasta aqui llega el bucle";
        break;
    }
    echo "$num x $i= " . $resultado . "<br>";
}




?>