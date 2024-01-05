<?php 
//primeros ejercicios en php

//1- crear dos variables(pais y continente), darles un valor e imprimirlas en pantalla,poner comentarios explicando el tipo de dato de las variables

//las variables contienen datos de tipo string
$pais="Colombia";
$continente="America";

echo "<h3>$pais esta en $continente </h3>";

echo "<hr>";

//2- sacar los numeros pares del 1 al 100
for ($i=1; $i <=100 ; $i++) { 
    if ($i%2==0) {
        echo $i . " ";
    };
};

echo "<hr>";


//3- imprimir por pantalla los cuadrados de los primeros 40 numeros naturales,con while.
$contador=0;
while ($contador <= 40) {
    $cuadrado=$contador*$contador;
    echo $cuadrado . " ";
    $contador++;
}

echo "<hr>";

//4- capturar 2 numeros por la url con get y hacer las operaciones basicas con esos numeros, yo cree un formulario para enviar los numeros(formularioEjercicio4.php).
$num1=$_GET['num1'];
$num2=$_GET['num2'];

$suma=$num1+$num2;
$resta=$num1-$num2;
$multiplicacion=$num1*$num2;
$division=$num1/$num2;

echo "<h2>La suma de los numeros es $suma, la resta es $resta, la multiplicacion es $multiplicacion y su division es $division</h2>";

echo "<hr>";

//5- mostrar todos los numeros entre dos numeros que nos llegen por get
if (isset($_GET["num1"]) && isset($_GET["num2"])) {

    $num1=$_GET["num1"];
    $num2=$_GET["num2"];

    while ($num1<=$num2) {
        echo $num1++ . " ";
    }

}else{
    echo "<h2>Los parametros get en la url son incorrectos</h2>";
}

echo "<hr>";

//6- imprimir las tablas de multiplicar del 1 al 10 en una tabla html.Se utilizan dos bucles,el primero pinta las celdas y el segundo pinta el contenido de esas celdas.
echo "<table border='1'><tr>";//inicio de la tabla

echo "<tr>";
    for ($cabecera=1; $cabecera <=10 ; $cabecera++) { 
        echo "<td>Tabla del $cabecera</td>";
    }
echo "</tr>";

echo "<tr>";//incio de celdas

for ($i=1; $i <=10 ; $i++) { 
    echo '<td>';
        for ($x=1; $x <=10 ; $x++) { 
            echo "$i x $x = " . ($i*$x) . "<br>";
        }
    echo '</td>';
}

echo "</tr>";//fin de celdas

echo "</table";//fin de la tabla

echo "<hr>";


//7- mostrar todos los numeros impares entre dos numeros que nos llegen por get
if (isset($_GET["num1"]) && isset($_GET["num2"])) {

    $num1=$_GET["num1"];
    $num2=$_GET["num2"];

    if($num1<$num2){
        for ($i=$num1; $i <=$num2 ; $i++) { 
            if($i%2!=0){
                echo "<h4>$i es impar</h4>";
            }else{
                echo "<h4>$i es par</h4>";
            }
        };
    }else{
        echo "<h2>El numero 1 debe ser mayor al numero 2</h2>";
    }
        
}else{
    echo "<h2>Los parametros get en la url son incorrectos</h2>";
}

echo "<hr>";


?>