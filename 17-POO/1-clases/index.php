<?php 

//POO en php

//Clase- es como un molde con el cual se pueden crear objetos con caracteristicas  similares, por ejemplo podemos crear la clase coche y de esta clase crear diferentes objetos coches con sus atributos y metodos.

//crear una clase
class Coche{

    //atributos(variables)
    public $color="rojo";
    public $marca="Ferrari";
    public $modelo="Aventador";
    public $velocidad=300;
    public $caballaje=500;
    public $plazas=2;

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

    public function getModelo(){
        return $this->modelo;
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


}

//crear objetos o instanciar la clase
$coche=new Coche();
$coche2=new Coche();

//usar los metodos
echo "La velocidad maxima del coche es: " . $coche->getVelocidad() . "<br>";

$coche->setColor("Amarillo");
echo "El color actual del coche 1 es: " . $coche->getColor() . "<br>";

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "Velocidad del coche al acelerar: " . $coche->getVelocidad() . "<br>";

$coche2->setColor("Verde");
echo "El color actual del coche 2 es: " . $coche->getColor() . "<br>";

$coche2->setModelo("Gallardo");
echo "El modelo del coche 2 es: " . $coche2->getModelo() . "<br>";





?>