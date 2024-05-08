<?php 

//el metodo constructor es un metodo que le da el estado inicial a los objetos que se creen de la clase,este metodo es el primero que se ejecuta de forma automatica cuando se crea un objeto.El constructor no devuelve ningun dato,solo se encarga de setear las propiedades que tendran los objetos(es un metodo magico).Se define con:  public function __construct(){}. Este constructor siempre debe ser publico para que funcione.

require_once 'coche.php';

$coche1=new Coche("Verde","Renault","Clio",150,200,5);
$coche2=new Coche("Azul","Seat","Panda",250,300,5);
$coche3=new Coche("Rojo","Citroen","Xara",350,300,4);

//accediendo a los atributos segun su visibilidad,el atributo color es publico por lo que si podemos modificarlo desde aqui
$coche1->color="Negro";

//marca es protected,por lo que si intentamos modificarlo desde aqui sale un error,pues solo se puede acceder desde la clase que la definio o las clases heredadas.Para modificar desde aqui esa propiedad se debe de crear en la clase un metodo setMarca() que permita el acceso a ella.
$coche1->setMarca("Chevrolet");

//para acceder a la propiedad $modelo, tambien debemos utilizar un metodo ya sea getter o setter pues esta es privada
// echo $coche2->getModelo();



echo $coche2->mostrarInformacion($coche2)


// var_dump($coche1);
// var_dump($coche2);
// var_dump($coche3);




?>