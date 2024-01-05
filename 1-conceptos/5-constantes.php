<?php 

    //constantes en php,no se modifica su valor, se definen utilizando la funcion define(), se le pasa el nombre y el valor,para mostrarla se pone solo el nombre sin el signo $

    define("nombre","julian");
    define("web","julianmoreno");

    echo "<h1>" . nombre . "</h1>"  . '<br>';
    echo "<h1>" . web . "</h1>";

    //constantes predefinidas en php(ver manual php), son las que ya vienen con el lenguaje,si ponemos PHP_ el intellisense de vsc ya muestra estas constantes y con un echo podemos ir viendo lo que hace cada una

    echo PHP_OS . '<br>';//esta nos dice que so usamos
    echo PHP_VERSION . '<br>';//esta nos dice la version del php
    echo __LINE__ . '<br>';//esta nos dice el numero de linea donde estamos
    echo __FILE__ . '<br>';//esta nos dice la ruta del archivo



?>