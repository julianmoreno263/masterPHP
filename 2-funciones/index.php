<?php 

#las funciones son bloques de codigo que realizan una tarea determinada y pueden ser reutilizables.Hay funciones que vienen con el lenguaje php y tambien podemos crear nuestras propias funciones.

#ejemplo 1, funcion que imprime nombres en pantalla
function nombres(){
    echo "Pepe <br>";
    echo "Sandra <br>";
    echo "Angie <br>";
    echo "Ingrid <br>";
    echo "<hr>";
}

nombres();

#ejemplo 2, crear una funcion con parametro que imprima la tabla de multiplicar del numero que se le pase por parametro
function tablaMultiplicar($num){

    for ($i=0; $i <=10 ; $i++) { 
        
        echo "$num x $i = " . ($num*$i) . "<br>";
    }
}
tablaMultiplicar(6);

echo "<hr>";


#ejemplo 3, crear una funcion pasando dos numeros como parametros y realizar las operaciones basicas de una calculadora, las funciones pueden tener parametros por defecto,estos son opcionales.
function calculadora($num1,$num2,$negrita=false){

    $suma=$num1+$num2;
    $resta=$num1-$num2;
    $multiplicacion=$num1*$num2;
    $division=$num1/$num2;

    if ($negrita) {
        echo "<h2>";
    }   

    echo "La suma entre $num1 y $num2 es $suma, la resta es $resta, la multiplicación es $multiplicacion y la división es $division";

    if ($negrita) {
        echo "</h2>";
    }  

}

calculadora(6,4,true);


echo "<hr>";

#ejemplo 4, crear una funcion con return, las buenas practicas indican que una funcion no deberia imprimir con echo nada, las funciones deben retornar los datos con el operador return, y si se quiere imprimir lo que esa funcion retorne pues se llama a la funcion dentro de un echo.
function retornaNombre($nombre){
    return "El nombre del usuario es $nombre";

}

echo(retornaNombre("Paula"));


echo "<hr>";

#ejemplo 5, llamado de funciones dentro de otra funcion.
function getNombre($nombre){
    return $nombre;
}

function getApellido($apellido){
    return $apellido;
}

function nombreCompleto($nombre,$apellido){

    $texto= "El nombre del usuario es " . getNombre($nombre) . " " . getApellido($apellido);
    return $texto;
}

echo(nombreCompleto("Paula", "Corredor"));


echo "<hr>";





?>