<?php 

class NotaController{

    public function listar(){
        //llamo al modelo Nota
        require_once 'models/Nota.php';

        //logica de la accion del controlador
        $nota=new Nota();

        //usando el metodo conseguirTodos() del ModeloBase que consulta a la bd
        $notas=$nota->conseguirTodos('notas');

        //se llama a la vista que mostrara esta informacion
        require_once 'views/nota/listar.php';

    }

    public function crear(){

        require_once 'models/Nota.php';

        $nota=new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo("Nota desde php en MVC");
        $nota->setDescripcion("Descripción de mi nota");
        $guardar=$nota->guardar();

        header("Location:index.php?controller=Nota&action=listar");
    }

    public function borrar(){
        
    }
}


?>