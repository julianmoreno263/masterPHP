<?php 

//operadores aritmeticos con php
$num1=55;
$num2=33;

echo 'suma: ' . ($num1+$num2) . '<br>';
echo 'resta: ' . ($num1-$num2) . '<br>';
echo 'multiplicacion: ' . ($num1*$num2) . '<br>';
echo 'division: ' . ($num1/$num2) . '<br>';
echo 'modulo o resto de la division: ' . ($num1%$num2) . '<br>';
echo "<hr>";

//operadores incremento y decremento en php
$year=2019;
//incremento
// $year++=$year+1;

//pre-incremento
//++$year= 1+$year

//decremento
// $year--=$year-1;

//pre-decremento
//--$year= 1-$year

echo $year . '<br>';

//operadores de asignacion, se pueden usar con cualquier operacion
$edad=55;

echo ($edad+=5) . "<br>";// le suma 5 a $edad
echo ($edad-=5) . "<br>";// le resta 5 a $edad



?>