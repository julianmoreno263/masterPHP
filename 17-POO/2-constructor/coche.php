<?php 

//POO en php

//Clase- es como un molde con el cual se pueden crear objetos con caracteristicas  similares, por ejemplo podemos crear la clase coche y de esta clase crear diferentes objetos coches con sus atributos y metodos.

//el metodo constructor es un metodo que le da el estado inicial a los objetos que se creen de la clase,este metodo es el primero que se ejecuta de forma automatica cuando se crea un objeto.El constructor no devuelve ningun dato,solo se encarga de setear las propiedades que tendran los objetos(es un metodo magico).Se define con:  public function __construct(){}. Este constructor siempre debe ser publico para que funcione.Las propiedades que se creen en la clase se setean dentro del constructor,asi se mantienen las buenas practicas.

//El constructor puede recibir parametros, asi cuando creemos los objetos de la clase podemos ir modificando si lo necesitamos estos parametros para cada objeto especifico,osea no seran datos fijos sino que por medio de los parametros del constructor vamos personalizando cada objeto.

//crear una clase
class Coche{

    //atributos(variables). Pueden tener una visibilidad especifica segun lo que se necesite, pueden ser public,private o protected.Estos tipos de visibilidad tambien se le pueden indicar a los metodos.

    //public=podemos acceder a un atributo publico dentro de la clase actual, en clases que hereden de esta clase o fuera de la clase.
    public $color;

    //protected=podemos acceder a estos desde la clase que los define y desde las clases que hereden de esta clase
    protected $marca;

    //private=solo se pueden acceder desde la clase que los define
    private $modelo;

    public $velocidad;
    public $caballaje;
    public $plazas;

    //constructor, aqui se setean las propiedades
    public function __construct( $color,$marca,$modelo,$velocidad,$caballaje,$plazas)
    {
        $this->color=$color;
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->velocidad=$velocidad;
        $this->caballaje=$caballaje;
        $this->plazas=$plazas;
        
    }


    //metodos(funciones)
    public function getColor(){
        //el $this significa: "busca en esta clase la propiedad X"
        return $this->color;
    }

    public function setColor($color){
        //le paso un color por parametro
        $this->color=$color;
    }

    public function setModelo($modelo){
        $this->modelo=$modelo;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }


    //metodos setter y getter
    public function setMarca($marca){

        $this->marca=$marca;
    }

    public function getModelo(){
        return $this->modelo;
    }


    //metodo para imprimir la informacion de un coche, este recibe un objeto de clase coche como parametro y se lo indicamos poniendo el tipo de dato delante del parametro,osea el nombre de la clase Coche,osea el tipo de dato del parametro es coche,asi si se le intenta pasar otro tipo de dato diferente no lo admite.
    public function mostrarInformacion(Coche $miObjeto){
        $informacion="<h1>Informacion del coche</h1>";
        $informacion.="Color: " . $miObjeto->color . "<br>";
        $informacion.="Modelo: " . $miObjeto->modelo . "<br>";
        $informacion.="Velocidad: " . $miObjeto->velocidad . "<br>";

        return $informacion;
    }

   


}


?>