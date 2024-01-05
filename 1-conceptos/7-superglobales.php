<?php 

//variables superglobales o de servidor, son variables predefinidas en el lenguaje que sirven para hacer operaciones y ver informacion del servidor

//variables de servidor
echo '<h1>';

//esto nos muestra la ip de nuestro servidor,si abrimos el navegador como localhost nos muestra ::1, pero si en vez de poner localhost ponemos nuestra ip(utilizando ipconfig) nos muestra la ip de la maquina,osea nuestro servidor local
echo $_SERVER['SERVER_ADDR'] . '<br>';

//para ver el dominio(osea en este caso localhost porque estamos en local) utilizamos:
echo $_SERVER['SERVER_NAME'] . '<br>';

//si quiero ver el software que estoy utilizando como servidor:
echo $_SERVER['SERVER_SOFTWARE'] . '<br>';

//para saber el navegador que uso:
echo $_SERVER['HTTP_USER_AGENT'] . '<br>';




echo '</h1>';


 ?>