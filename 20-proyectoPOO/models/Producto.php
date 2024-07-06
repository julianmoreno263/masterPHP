<?php 

class Producto{

    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;

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
     * Get the value of categoria_id
     */ 
    public function getCategoria_id()
    {
        return $this->categoria_id;
    }

    /**
     * Set the value of categoria_id
     *
     * @return  self
     */ 
    public function setCategoria_id($categoria_id)
    {
        $this->categoria_id = $categoria_id;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $this->db->real_escape_string($nombre);

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
        $this->descripcion = $this->db->real_escape_string($descripcion);

    }

    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */ 
    public function setPrecio($precio)
    {
        $this->precio = $this->db->real_escape_string($precio);

    }

    /**
     * Get the value of stock
     */ 
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @return  self
     */ 
    public function setStock($stock)
    {
        $this->stock = $this->db->real_escape_string($stock);

    }

    /**
     * Get the value of oferta
     */ 
    public function getOferta()
    {
        return $this->oferta;
    }

    /**
     * Set the value of oferta
     *
     * @return  self
     */ 
    public function setOferta($oferta)
    {
        $this->oferta = $this->db->real_escape_string($oferta);

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
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @return  self
     */ 
    public function setImagen($imagen)
    {
        $this->imagen = $this->db->real_escape_string($imagen);
    }


    public function getAll(){

        $productos=$this->db->query("SELECT * FROM productos ORDER BY id DESC");
        return $productos;
    }

    public function getAllCategory(){

        $sql="SELECT p.*, c.nombre AS 'catnombre' FROM productos p " 
        . "INNER JOIN categorias c ON c.id=p.categoria_id " 
        . "WHERE p.categoria_id={$this->getCategoria_id()} "
        . "ORDER BY id DESC";
        $productos=$this->db->query($sql);
        return $productos;
    }

    public function getOne(){

        $producto=$this->db->query("SELECT * FROM productos WHERE id={$this->getId()}");
        return $producto->fetch_object();
    }

    public function save(){
        $sql="INSERT INTO productos  VALUES(null, {$this->getCategoria_id()},'{$this->getNombre()}','{$this->getDescripcion()}',{$this->getPrecio()}, {$this->getStock()},null,CURDATE(),'{$this->getImagen()}')";
           
        $save=$this->db->query($sql);

        $result=false;

        if ($save) {
            $result=true;
        }

        return $result;
    }

    public function edit(){

        $sql="UPDATE productos  SET nombre='{$this->getNombre()}',descripcion='{$this->getDescripcion()}',precio={$this->getPrecio()},stock= {$this->getStock()}, categoria_id={$this->getCategoria_id()}";

        if ($this->getImagen()!=null) {
            $sql .= ", imagen='{$this->getImagen()}'";
        }

        $sql .= " WHERE id={$this->id};";
           
        $save=$this->db->query($sql);

        $result=false;

        if ($save) {
            $result=true;
        }

        return $result;
    }

    public function delete(){

        $sql="DELETE FROM productos WHERE id={$this->id}";
        $delete=$this->db->query($sql);

        $result=false;

        if ($delete) {
            $result=true;
        }

        return $result;
    }
}



?>