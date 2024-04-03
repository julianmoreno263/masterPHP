<?php 

if (isset($_POST)) {
    //conexion a la bd
    require_once('includes/conexion.php');

    $titulo=isset($_POST['titulo']) ? mysqli_real_escape_string($db,$_POST['titulo']) : false;
    $descripcion=isset($_POST['descripcion']) ? mysqli_real_escape_string($db,$_POST['descripcion']) : false;
    $categoria=isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
    $usuario=(int)$_SESSION['usuario']['id'];


    //array de errores para la validacion
    $errores=array();

    //validar antes de guardar en la bd cada campo del formulario
    //validar campos
    if (empty($titulo)) {
        # code...
        $errores['titulo']= 'El titulo no es valido <br>';
    }

    if (empty($descripcion)) {
        # code...
        $errores['descripcion']= 'La descripcion no es valida <br>';
    }

    if (empty($categoria) && !is_numeric($categoria)) {
        # code...
        $errores['categoria']= 'La categoria no es valida <br>';
    }

    if (!$errores) {
        if(isset($_GET['editar'])){
            $entrada_id=$_GET['editar'];
            $usuario_id=$_SESSION['usuario']['id'];

            $sql="update entradas set titulo='$titulo',descripcion='$descripcion',categoria_id=$categoria " .
            " where id=$entrada_id and usuario_id=$usuario_id";
        }else{
            $sql="insert into entradas values(null,$usuario,$categoria,'$titulo','$descripcion',CURDATE())";
        }
        $guardar= mysqli_query($db,$sql);

        header('Location:entrada.php?id=' . $_GET['editar']);

    }else{
        $_SESSION['errores_entrada']=$errores;
        if (isset($_GET['editar'])) {
            header('Location:editarEntrada.php?id=' . $_GET['editar']);
        }else{
            header('Location:crearEntradas.php');
        }
    }
}

?>