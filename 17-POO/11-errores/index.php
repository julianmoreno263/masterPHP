<?php 

//manejo de errores en php, con las clausulas try-catch podemos manejar posibles errores que se ejecuten en php

//con el objeto Exception se puede lanzar un error junto con la palabra throw
try {

    if (isset($_GET['id'])) {
        echo "<h2>El parametro get es: {$_GET['id']}</h2>";
    } else {
    throw new Exception("Faltan parametros...");
    }
    
} catch (Exception $e) {
    echo "Ha habido un error: " . $e->getMessage() . "<br>";
}finally{
    echo "Todo correcto...";
}












?>