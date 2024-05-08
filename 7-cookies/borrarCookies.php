<?php 


#para eliminar cookies puedo utilizar el metodo unset() y le paso la cookie a borrar, pero ademas debo caducarlas,porque como las cookies se guardan en el pc y no en el servidor,asi yo cierre el navegador las cookies siguen existiendo,por lo que para caducar la cookie se lo expreso en un setcookie() pero sin valor y con el time() pasado de fecha,osea le pongo a la fecha actual un -100 y asi la fecha ya esta caducada.Al abrir este archivo en el navegador,veremos que borrara la cookie que aparece en herramientas de desarrollador.

if (isset($_COOKIE["micookie"])) {
    # code...
    unset($_COOKIE["micookie"]);

    //aqui caduca la cookie
    setcookie("micookie","",time()-100);

}

//asi puedo redireccionar  aotra pagina en php
header("location:verCookies.php");



?>