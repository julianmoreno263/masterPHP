<?php 

//herencia-cuando una clase puede compartir atributos y metodos entre clases,la herencia sirve para reutilizar codigo y asi poder crear clases hijas a partir de una clase padre,la clase padre sera la clase mas general y las hijas se iran especializando por lo que seran mas especificas,estas clases hijas tendran las propiedades y metodos de la clase padre y ademas tendran los suyos propios.


//clase padre
class Persona{

    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;


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
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellidos
     */ 
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @return  self
     */ 
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of altura
     */ 
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     *
     * @return  self
     */ 
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get the value of edad
     */ 
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */ 
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function hablar(){
        return "Estoy hablando..";
    }

    public function caminar(){
        return "Estoy caminando..";
    }
}


//clases hijas, pueden tener su metodo constructor y este tambien se puede ir heredando de clase en clase,para esto se utiliza la palabra reservada parent::__construct(), asi la clase hija sabra que esta heredando el constructor de su clase padre.
class Informatico extends Persona{

    public $lenguajes;
    public $experienciaProgramador;

    public function __construct()
    {
        $this->lenguajes="HTML,CSS,JS";
        $this->experienciaProgramador=10;
    }

    public function sabeLenguajes($lenguajes){
        $this->lenguajes=$lenguajes;
        return $this->lenguajes;
    }

    public function programar(){
        return "Soy programador...";
    }

    public function repararPc(){
        return "Estoy reparando un PC...";
    }

    public function hacerOfimatica(){
        return "Estoy escribiendo en word...";
    }
}

class TecnicoRedes extends Informatico{

    public $auditarRedes;
    public $experienciaRedes;

    public function __construct()
    {
        parent::__construct();

        $this->auditarRedes="Experto";
        $this->experienciaRedes=5;
    }

    public function auditoria(){
        return "Estoy auditando una red..";
    }
}




?>