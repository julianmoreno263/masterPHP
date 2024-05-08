<?php

#crear una sesion que aumente su valor en 1 o disminuya en 1 en funcion al parametro get counter si esta a 1 o a 0.


session_start();

//aqui creamos una sesion con nombre numero y comienza en 0
if (!isset($_SESSION['numero'])) {
    $_SESSION['numero'] = 0;
}

if (isset($_GET['counter']) && $_GET['counter'] == 1) {
    $_SESSION['numero']++;
}

if (isset($_GET['counter']) && $_GET['counter'] == 0) {
    $_SESSION['numero']--;
}

?>

<h1>El valor de la sesion numero es: <?= $_SESSION['numero'] ?></h1>

<a href="ejercicio1.php?counter=1">Aumentar Valor</a>
<a href="ejercicio1.php?counter=0">Disminuir Valor</a>