<?php 

class NotaController{

    public function listar(){
        //llamo al modelo Nota
        require_once 'models/Nota.php';

        //logica de la accion del controlador
        $nota=new Nota();
        $nota->setNombre('Hola');
        $nota->setContenido('Hola mundo en php y mvc');

        //se llama a la vista que mostrara esta informacion
        require_once 'views/nota/listar.php';

    }

    public function crear(){

    }

    public function borrar(){
        
    }
}


?>