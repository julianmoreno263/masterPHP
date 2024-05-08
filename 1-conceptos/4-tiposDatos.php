<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos de datos</title>
</head>

<body>

    <?php

    $num = 22; //tipo int
    $num1 = 22.56; //tipo float o double
    $text = "hola amigos, este es el numero $num1"; //tipo string
    $verdadero = true; //tipo boolean

    #ademas hay arrays,null,object

    #asi puedo saber el tipo de dato
    echo gettype($num) . "<br>";
    echo gettype($num1) . "<br>";
    echo gettype($text) . "<br>";
    echo gettype($verdadero) . "<br>";

    //para debuggear una variable puedo utilizar el metodo var_dump(),osea si quiero saber las caracteristicas de esa variable pero no quiero imprimirla,solo conocer la informacion de esa variable utilizo este metodo.
    var_dump($num);
    var_dump($num1);
    var_dump($text);
    var_dump($verdadero);





    ?>

</body>

</html>