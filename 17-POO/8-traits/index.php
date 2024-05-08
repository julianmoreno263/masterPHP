<?php 


//un trait nos permite crear metodos para que los compartan diferentes clases sin necesidad de crear herencia con una clase padre.

//Los traits en PHP permiten simular una herencia múltiple. El lenguaje de programación sólo soporta herencia simple, por lo que con los traits podemos utilizar múltiples clases en una clase. 

//Un Trait es similar a una clase, pero con el único objetivo de agrupar funcionalidades muy específicas y de una manera coherente. En definitiva, es una forma de copiar y pegar código entre varios objetos del proyecto; de hecho, internamente, PHP lo único que hace es literalmente eso, copiar el código del trait en las clases que lo usan.Esto es muy util cuando no queremos utilizar herencia.

//para usar el trait en las clases que necesitemos lo llamamos con la palabra reservada 'use'.

//crear el trait
trait Utilidades{

    public function mostrarNombre()
    {
        echo "<h1>El nombre es: " . $this->nombre . "</h1>";
    }
}


class Carro{

    public $nombre;
    public $marca;

    //utilizando el trait
    use Utilidades;

}

class Persona{

    public $nombre;
    public $apellidos;

    //utilizando el trait
    use Utilidades;

}

class Videojuegos{

    public $nombre;
    public $anio;

    //utilizando el trait
    use Utilidades;

}

//instanciando clases para usar el trait
$carro=new Carro();
$persona=new Persona();
$videojuego=new Videojuegos();

$carro->nombre="Logan";
$carro->mostrarNombre();

$persona->nombre="Pepe";
$persona->mostrarNombre();

$videojuego->nombre="Mario Bros";
$videojuego->mostrarNombre();


var_dump($carro)





?>