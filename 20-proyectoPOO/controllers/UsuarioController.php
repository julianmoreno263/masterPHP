<?php

require_once 'models/Usuario.php';


class UsuarioController{

    public function index(){

        echo 'Controlador Usuarios, acción index';
    }


    public function registro(){

        require_once 'views/usuario/registro.php';
    }


    public function save(){

        if(isset($_POST)){

            $nombre=isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos=isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email=isset($_POST['email']) ? $_POST['email'] : false;
            $password=isset($_POST['password']) ? $_POST['password'] : false;

            if($nombre && $apellidos && $email && $password){
                $usuario=new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPassword($password);

                $save=$usuario->save();
                if($save){
                    $_SESSION['register']='complete';
                }else{
                    $_SESSION['register']='failed';
                }
            }else{
                $_SESSION['register']='failed';
            }
            
        }else{
            $_SESSION['register']='failed';
        }

        header('Location:' . base_url . 'usuario/registro');
    }

    public function login(){
        if (isset($_POST)) {
            //identificar al usuario
            //consulta a la bd
            $usuario=new Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);

            $identity=$usuario->login();

            if ($identity && is_object($identity)) {
                $_SESSION['identity']=$identity;
                
                //asi puedo utilizar la consola del navegador con php para depurar errores con esta consola:  echo("<script>console.log('PHP: " . $variable . "');</script>");

                if ($identity->rol=='admin') {
                    $_SESSION['admin']=true;
                }
                
            }else{
                $_SESSION["error_login"]='Identificacion fallida';
            }

        }

        header('Location:' . base_url);
    }

    public function logout(){
        if (isset($_SESSION['identity'])) {
            unset($_SESSION['identity']);
        }

        if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
        }

        header('Location:' . base_url);

    }


}//fin de la clase

?>