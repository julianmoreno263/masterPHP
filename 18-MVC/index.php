
<h1>Bienvenido a mi web con MVC</h1>
<?php 

require_once "controllers/UsuarioController.php";
require_once "controllers/NotaController.php";


if (isset($_GET['controller'])) {
    $nombreControlador=$_GET['controller'] . 'Controller';
}else{
    echo "La página no existe";
    exit;
}


if(class_exists($nombreControlador)){

    $controlador=new $nombreControlador();

    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){

        $action=$_GET['action'];
        $controlador->$action();
    }else{
        echo "La página no existe";
    }

}else{
    echo "La página no existe";
}






?>