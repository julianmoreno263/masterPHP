<?php 



if (isset($_POST)) {

    //conexion a la bd
    require_once('includes/conexion.php');


    # capturar los valores del formulario y ademas estamos evaluando si tiene algo, con mysqli_real_escape_string lo que hago es escapar caracteres en los campos del formulario para evitar vulnerabilidades, escapar significa que con esta funcion todo lo que se coloque en los campos del formulario se interpreta como texto,como strings, asi esos caracteres no los pueden utilizar para hacer inyeccion de codigo malicioso a traves del formulario.
    $nombre=isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']): false;
    $apellidos=isset($_POST['apellidos']) ? mysqli_real_escape_string($db,$_POST['apellidos']) : false;
    $email=isset($_POST['email']) ? mysqli_real_escape_string($db,trim($_POST['email']) ): false;

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
        echo $errores['nombre'];
    }

    //validar apellidos
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/",$apellidos)) {
        # code...
        $apellidosValido=true;
    }else{
        $apellidosValido=false;
        $errores['apellidos']= 'Los apellidos son invalidos <br>';
        echo $errores['apellidos'];
    };

    //validar email
    if (!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)) {
        # code...
        $emailValido=true;
    }else{
        $emailValido=false;
        $errores['email']= 'El email es invalido <br>';
        echo $errores['email'];
    };

    //cuando el array de $errores este vacio,osea no tenga errores,podemos guardar los datos en la bd
    $guardarUsuario=false;
    if (count($errores)==0) {
        $usuario=$_SESSION['usuario'];
        $guardarUsuario=true;

        //comprobar si el email ya existe
        $sql="select id,email from usuarios where email='$email'";
        $issetEmail=mysqli_query($db,$sql);
        $issetUser=mysqli_fetch_assoc($issetEmail);

        if($issetUser['id']==$usuario['id'] || empty($issetUser)){
            # actualizamos datos del usuario en la bd,las variables que son de tipo string se pasan entre comillas
            $usuario=$_SESSION['usuario'];
            $sql="update usuarios set nombre='$nombre',apellidos='$apellidos',email='$email'
            where id=" . $_SESSION['usuario']['id'];

            $guardar=mysqli_query($db,$sql);


            if ($guardar) {
                $_SESSION['usuario']['nombre']=$nombre;
                $_SESSION['usuario']['apellidos']=$apellidos;
                $_SESSION['usuario']['email']=$email;
                # code...
                $_SESSION['completado']='Tus datos se han actualizado con exito en la bd';
            }else{
                $_SESSION['errores']['general']='Fallo al actualizar tus datos en la bd';
            }
        }else{
            $_SESSION['errores']['general']='El usuario ya existe en la bd';
        }
        
    }else{
        $_SESSION['errores']=$errores;
        header('Location:index.php');
    }

}

header('Location:misDatos.php');



?>