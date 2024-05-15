<?php 


//el metodo magico call de php nos permite utilizar un metodo de un objeto aunque ese metodo  aun no se haya creado o a una propiedad que este inaccesible, por ejemplo si creamos un objeto de la clase Persona y queremos acceder a las propiedades de esa clase que son private no podremos hacerlo, o si por ejemplo quisieramos obtener el $nombre no podemos porque no hay un metodo para eso. Pero si implementamos el metodo call en la clase este se ejecutara al detectar que un metodo que estamos invocando no existe, se le deben pasar dos argumentos a este metodo.

class Persona{

    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre,$edad,$ciudad){

        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->ciudad=$ciudad;

    }

    public function __call($name,$arguments){

        return "Método call invocado...";
    }

}

$persona=new Persona("pepe", 45,"Madrid");

// $persona->$nombre;
echo $persona->getNombre();





?>