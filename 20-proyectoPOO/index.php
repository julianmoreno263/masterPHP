
<?php 


//aqui en el index.php hago un require de los archivos del header.php.sidebar.php y footer.php para que siempe se esten viendo,si mi sitio tiene varias paginas tendra el mismo header,sidebar y footer.

require_once "autoload.php";
require_once "views/layouts/header.php";
require_once "views/layouts/sidebar.php";


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


require_once "views/layouts/footer.php";



?>