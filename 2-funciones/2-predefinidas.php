<?php 

#funciones predefinidas son aquellas que ya vienen con el lenguaje php, hay muchas funciones que podemos utilizar,hay que ver en la documentacion.

#var_dump nos da la informacion de el elemento que le pasemos,sirve para debuggear
$nombre="julian";
var_dump($nombre);

echo "<hr>";

#con date() manejamos fechas,hay muchas variaciones de esta funcion
echo date("d-m-y");#aqui imprimo la fecha actual con este formato

echo "<hr>";

#con time() saco la fecha en formato unix,cada vez que actualice la pagina va cambiando y se va actualizando cada segundo.
echo time();

echo "<hr>";

#con funciones matematicas puedo hacer operaciones
echo "Raiz cuadrada de 10: " . sqrt(10) . "<br>";
echo "Numero aleatorio entre 10 y 40: " . rand(10,40) . "<br>";
echo "Numero PI: " . pi() . "<br>";
echo "Redondear un numero: " . round(7.891234, 2) . "<br>";


echo "<hr>";

#otras funciones utiles
echo gettype($nombre) . "<br>";

#con las funciones is_  puedo saber los tipos de datos, o que son esas variables,u otros elementos
if (is_string($nombre)) {
    echo "La variable nombre es un string";
}

echo "<br>";

if (!is_float($nombre)) {
    echo "La variable nombre no es un numero con decimales";
}


echo "<hr>";

#con la funcion isset() podemos saber si una variable existe en el programa
if(isset($nombre)){
    echo "La variable existe en el programa";
}else{
    echo "La variable no existe en el programa";
}


echo "<hr>";

#con la funcion trim() eliminamos los espacios que puedan haber en un string,limpiamos la variable,esto es util por ejemplo en un login,si el usuario pone espacios que no son necesarios a la hora de logearse
$frase="   mi frase   ";
var_dump(trim($frase));


echo "<hr>";

#eliminar variables o indices de arrays con unset.
$year=2023;
unset($year);
var_dump($year);#sale variable undefined

echo "<hr>";

#comprobar variable vacia con empty()
$texto="";
if (empty($texto)) {
    echo "La variable esta vacia";
}else{
    echo "La variable tiene contenido";
}

echo "<hr>";

#strlen nos dice el numero de caracteres de un string
$cadena="12345";
echo strlen($cadena);

echo "<hr>";

#strpos encuentra la posicion de un caracter determinado en un string,por ejemplo si quiero buscar la palabra vida me dira que esta comienza en la posicion 3.
$frase="la vida es bella";
echo strpos($frase,"vida");

echo "<hr>";

#str_replace() reemplazo una palabra en un string
$frase=str_replace("vida","moto",$frase);
echo $frase;

echo "<hr>";

#convertir a mayusculas o minusculas
echo strtolower($frase) . "<br>";
echo strtoupper($frase) . "<br>";

echo "<hr>";


?>