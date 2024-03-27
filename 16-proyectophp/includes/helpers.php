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

function conseguirCategorias($conexion){
    $sql='select * from categorias order by id asc';
    $categorias=mysqli_query($conexion,$sql);
    $result=array();

    if ($categorias && mysqli_num_rows($categorias)>=1) {
        $resultado=$categorias;
    }

    return $resultado;
}

function conseguirUltimasEntradas($conexion){

    $sql='select e.*,c.nombre as "categoria" from entradas e '
         . ' inner join categorias c on e.categoria_id=c.id ' 
         . ' order by e.id desc limit 4';

    $entradas=mysqli_query($conexion,$sql);
    $resultado=array();

    if ($entradas && mysqli_num_rows($entradas)>=1) {
        $resultado=$entradas;
    }

    return $resultado;
}




?>