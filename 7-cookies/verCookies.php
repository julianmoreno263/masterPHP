<?php 


#para mostrar el valor de las cookies debo usar la variable superglobal $_COOKIE,esta es un array asociativo.

if (isset($_COOKIE["micookie"])) {
    # code...
    echo "<h1>" . $_COOKIE["micookie"] . "</h1>";
}else{
    echo "No existe la cookie";
};

if (isset($_COOKIE["unyear"])) {
    # code...
    echo "<h1>" . $_COOKIE["unyear"] . "</h1>";
}else{
    echo "No existe la cookie";
};


?>

<a href="borrarCookies.php">Borrar las cookies</a>
<br>
<a href="crearCookies.php">Crear cookies</a>
