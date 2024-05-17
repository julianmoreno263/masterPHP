<?php 

require_once 'ModeloBase.php';

class Nota extends ModeloBase{
    public $usuario_id;
    public $titulo;
    public $descripcion;

    public function __construct(){

        //aqui heredo el constructor de la clase padre en el que se creo una instancia de la conexion a la bd
        parent::__construct();
    }

    /**
     * Get the value of usuario_id
     */ 
    public function getUsuario_id()
    {
        return $this->usuario_id;
    }

    /**
     * Set the value of usuario_id
     *
     * @return  self
     */ 
    public function setUsuario_id($usuario_id)
    {
        $this->usuario_id = $usuario_id;

        return $this;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function guardar(){

        $sql="insert into notas(usuario_id,titulo,descripcion,fecha) 
        values({$this->usuario_id},'{$this->titulo}','{$this->descripcion}',CURDATE())";

        $guardado=$this->db->query($sql);
        return $guardado;
    }
}




?>