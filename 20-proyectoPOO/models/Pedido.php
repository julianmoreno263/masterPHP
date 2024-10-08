<?php 

class Pedido{

    private $id;
    private $usuario_id;
    private $provincia;
    private $localidad;
    private $direccion;
    private $coste;
    private $estado;
    private $fecha;
    private $hora;

    private $db;

    public function __construct(){
        $this->db=Database::connect();
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Get the value of provincia
     */ 
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set the value of provincia
     *
     * @return  self
     */ 
    public function setProvincia($provincia)
    {
        $this->provincia = $this->db->real_escape_string($provincia);

    }

    /**
     * Get the value of localidad
     */ 
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set the value of localidad
     *
     * @return  self
     */ 
    public function setLocalidad($localidad)
    {
        $this->localidad = $this->db->real_escape_string($localidad);
    }

    /**
     * Get the value of direccion
     */ 
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */ 
    public function setDireccion($direccion)
    {
        $this->direccion = $this->db->real_escape_string($direccion);

    }

    /**
     * Get the value of coste
     */ 
    public function getCoste()
    {
        return $this->coste;
    }

    /**
     * Set the value of coste
     *
     * @return  self
     */ 
    public function setCoste($coste)
    {
        $this->coste = $coste;

        return $this;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of hora
     */ 
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set the value of hora
     *
     * @return  self
     */ 
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    public function getAll(){

        $productos=$this->db->query("SELECT * FROM pedidos ORDER BY id DESC");
        return $productos;
    }

    public function getOne(){

        $producto=$this->db->query("SELECT * FROM pedidos WHERE id={$this->getId()}");
        return $producto->fetch_object();
    }

    public function getOneByUser(){

        $sql="SELECT p.id, p.coste FROM pedidos p "
            . "WHERE p.usuario_id={$this->getUsuario_id()} ORDER BY id DESC LIMIT 1";

        $pedido=$this->db->query($sql);
        
        return $pedido->fetch_object();
    }

    public function getAllByUser(){

        $sql="SELECT p.* FROM pedidos p "
            . "WHERE p.usuario_id={$this->getUsuario_id()} ORDER BY id DESC";
        $pedido=$this->db->query($sql);
        return $pedido;
    }

    public function getProductsByPedido($id){

        $sql="SELECT pr.*, lp.unidades FROM productos pr "
            . "INNER JOIN lineas_pedidos lp ON pr.id=lp.producto_id "
            . "WHERE lp.pedido_id={$id}";

        $productos=$this->db->query($sql);

        return $productos;
    }

    public function save(){
        $sql="INSERT INTO pedidos  VALUES(null, {$this->getUsuario_id()},'{$this->getProvincia()}','{$this->getLocalidad()}','{$this->getDireccion()}',{$this->getCoste()},'confirm',CURDATE(),CURTIME())";
           
        $save=$this->db->query($sql);

        $result=false;

        if ($save) {
            $result=true;
        }

        return $result;
    }

    public function saveLinea(){
        $sql="SELECT LAST_INSERT_ID() as 'pedido';";
        $query=$this->db->query($sql);
        $pedido_id=$query->fetch_object()->pedido;

        foreach($_SESSION['carrito'] as $elemento){
            $producto=$elemento['producto'];

            $insert="INSERT INTO lineas_pedidos VALUES(null,{$pedido_id},{$producto->id},{$elemento['unidades']})";
            $save=$this->db->query($insert);
        }

        $result=false;

        if ($save) {
            $result=true;
        }

        return $result;
    }

    public function edit(){

        $sql="UPDATE pedidos  SET estado='{$this->getEstado()}' ";
        $sql .= " WHERE id={$this->getId()};";
           
        $save=$this->db->query($sql);

        $result=false;

        if ($save) {
            $result=true;
        }

        return $result;
    }
}



?>