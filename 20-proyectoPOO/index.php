
<?php 


//aqui en el index.php hago un require de los archivos del header.php.sidebar.php y footer.php para que siempe se esten viendo,si mi sitio tiene varias paginas tendra el mismo header,sidebar y footer.

session_start();
require_once "autoload.php";
require_once "config/db.php";
require_once "config/parameters.php";
require_once "helpers/utils.php";
require_once "views/layouts/header.php";
require_once "views/layouts/sidebar.php";


function showError(){
    $error=new ErrorController();
    $error->index();  
}

if (isset($_GET['controller'])) {
    $nombreControlador=$_GET['controller'] . 'Controller';
}elseif(!isset($_GET['controller']) && isset($_GET['action'])){
    $nombreControlador= controller_default;
}else{
    showError();  
    exit;
}



if(class_exists($nombreControlador)){

    $controlador=new $nombreControlador();

    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){

        $action=$_GET['action'];
        $controlador->$action();
    }elseif(!isset($_GET['controller']) && isset($_GET['action'])){
        $actionDefault=action_default;
        $action->$actionDefault;
    }else{
        showError();      
    }
}else{
    showError();  
}


require_once "views/layouts/footer.php";



?>