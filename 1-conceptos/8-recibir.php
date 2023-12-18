<?php 

//otra variable superglobal es $_GET la cual sirve para rescatar los datos que enviemos a traves de un formulario, vamos a enviar datos desde el formulario formulario.php y los rescataremos en este archivo utilizando $_GET,el formulario debe tener como method=get para cuando va a enviar datos y queremos ver esos datos en la url(aunque es mala practica,se recomienda siempre usar post).Si hago un var_dump($_GET) me muestra la informacion de todo lo que esta variable superglobal a capturado

echo '<h1>' . $_POST['nombre'] . ' ' . $_POST['apellidos'] . '</h1><br>';
echo '<h1>' . $_POST['email'] . '</h1><br>';
var_dump($_POST);




?>