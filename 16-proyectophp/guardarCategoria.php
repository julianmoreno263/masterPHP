<?php 

if (isset($_POST)) {
     //conexion a la bd
     require_once('includes/conexion.php');

     $nombre=isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']) : false;

         //array de errores
    $errores=array();

    //validar antes de guardar en la bd cada campo del formulario
    //validar nombre
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)) {
        # code...
        $nombreValidado=true;
    }else{
        $nombreValidado=false;
        $errores['nombre']= 'El nombre es invalido <br>';
    }

    if (!$errores) {
        $sql="insert into categorias values(null,'$nombre')";
        $guardar= mysqli_query($db,$sql);
    }
}

header('Location:index.php');




?>