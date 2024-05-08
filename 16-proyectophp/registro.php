<?php 



if (isset($_POST)) {

    //conexion a la bd
    require_once('includes/conexion.php');

    //iniciar sesion
    if(!isset($_SESSION)){
        session_start();
    }

    # capturar los valores del formulario y ademas estamos evaluando si tiene algo, con mysqli_real_escape_string lo que hago es escapar caracteres en los campos del formulario para evitar vulnerabilidades, escapar significa que con esta funcion todo lo que se coloque en los campos del formulario se interpreta como texto,como strings, asi esos caracteres no los pueden utilizar para hacer inyeccion de codigo malicioso a traves del formulario.
    $nombre=isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']): false;
    $apellidos=isset($_POST['apellidos']) ? mysqli_real_escape_string($db,$_POST['apellidos']) : false;
    $email=isset($_POST['email']) ? mysqli_real_escape_string($db,trim($_POST['email']) ): false;
    $password=isset($_POST['password']) ? mysqli_real_escape_string($db,$_POST['password']) : false;

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

    //validar password
    if (!empty($password)) {
        # code...
        $passwordValido=true;
    }else{
        $passwordValido=false;
        $errores['password']= 'El password esta vacio <br>';
        echo $errores['password'];
    };

    //cuando el array de $errores este vacio,osea no tenga errores,podemos guardar los datos en la bd
    $guardarUsuario=false;
    if (count($errores)==0) {

        $guardarUsuario=true;

        //cifrar contrasena utilizando un costo de 4 veces,osea realizar 4 pasadas para cifrar el password
        $passwordSegura=password_hash($password,PASSWORD_BCRYPT,['cost'=>4]);

        # insertamos datos del usuario en la bd,las variables que son de tipo string se pasan entre comillas
        $sql="insert into usuarios values(null,'$nombre','$apellidos','$email','$passwordSegura',CURDATE())";

        $guardar=mysqli_query($db,$sql);


        if ($guardar) {
            # code...
            $_SESSION['completado']='El registro se ha echo con exito en la bd';
        }else{
            $_SESSION['errores']['general']='Fallo al insertar registro en la bd';
        }

    }else{
        $_SESSION['errores']=$errores;
        header('Location:index.php');
    }

}

header('Location:index.php');



?>