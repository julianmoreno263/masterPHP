<?php 

//funciones helpers de php
function mostrarError($errores,$campo){
    $alerta='';

    if(isset($errores[$campo]) && !empty($campo)){
        $alerta="<div class='alerta alerta-error'>" .$errores[$campo] . "</div>";
    }

    return $alerta;
}

function borrarErrores(){

    $borrado=false;
    
    if (isset($_SESSION['errores'])) {
        # code...
        $_SESSION['errores']=null;
        $borrado=session_unset();
    }

    if (isset($_SESSION['completado'])) {
        # code...
        $_SESSION['completado']=null;
        session_unset();
    }

    return $borrado;
}




?>