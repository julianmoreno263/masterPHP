<?php 


//una clase abstracta es aquella que no se puede instanciar, pero si podemos heredar de ella. Las clases abstractas son clases que no pueden ser instanciadas directamente, pero que pueden ser utilizadas como base para crear nuevas clases.

//para especificar que una clase sera abstracta utilizo en ella la palabra abstract al igual en sus  metodos, y los metodos como seran abstractos no llevan cuerpo,solo de declaran porque estos metodos se utilizaran en las clases que heredan y es en esas clases que segun la necesidad se codifican los metodos para hacer la funcionalidad especifica,por eso son metodos abstractos.


//clase abstracta
abstract class Ordenador{

    public $encendido;

    abstract public function encender();
    
    public function apagar(){
        $this->encendido=false;
    }
    
}

class PcAsus extends Ordenador{

    public $software;

    public function arrancarSoftware(){

        $this->software=true;
    }

    //aqui utilizo el metodo abstracto que heredo y le doy la funcionalidad que necesito
    public function encender()
    {
        $this->encendido=true;
    }

}


$pc=new PcAsus();
$pc->arrancarSoftware();
$pc->encender();
$pc->apagar();


var_dump($pc)






?>