<?php 

if (isset($_POST["titulo"]) && isset($_POST["descripcion"])){
    # code...
    echo "<h2>" . $_POST["titulo"] . "</h2>";
    echo "<h2>" . $_POST["descripcion"] . "</h2>"; 
}


?>