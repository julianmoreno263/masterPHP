<?php 

//iniciar la sesion y la conexion a la bd
require_once('includes/conexion.php');

//recoger los datos del formulario
if(isset($_POST)){
    $email=trim($_POST['email']);
    $password=$_POST['password'];

    //consulta para comprobar las credenciales del usuario
    $sql="select * from usuarios where email='$email'";
    $login=mysqli_query($db,$sql);

    if ($login && mysqli_num_rows($login)==1) {
        //aqui saco los datos del usuario en un resulset
        $usuario=mysqli_fetch_assoc($login);
        //comprobar contrasena
        $verify=password_verify($password,$usuario['password']);

        if ($verify) {
            //utilizar una sesion para guardar los datos del usuario logeado
            $_SESSION['usuario']=$usuario;

            if (isset($_SESSION['error_login'])) {
                unset($_SESSION['error_login']);
            }
            
        }else{
            //si algo falla enviar una sesion con el error
            $_SESSION['error_login']='Login incorrecto';
        }

    }else{
        //mensaje de error
        $_SESSION['error_login']='Login incorrecto';
    }


}

//redirigir al index.php
header('Location:index.php');


?>