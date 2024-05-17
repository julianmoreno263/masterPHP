<?php 

require_once 'config/database.php';


class ModeloBase{

    public $db;

    public function __construct(){
        $this->db=Database::conectar();
    }

    //este metodo pretende ser general para todos los modelos,si lo uso en el controlador NotaController me debe sacar todos los registros de esa tabla y lo mismo con el de UsuarioController.
    public function conseguirTodos($tabla){
        $query=$this->db->query("select * from $tabla ORDER BY id DESC");
        return $query;
    }
    
}

?>