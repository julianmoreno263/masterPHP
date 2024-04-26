<?php 


//una interfaz es un contrato donde definimos que metodos y en que orden van a estar en una clase. Las interfaces de objetos permiten crear código con el cual especificar qué métodos deben ser implementados por una clase, sin tener que definir cómo estos métodos son manipulados.

//en pocas palabras, nosotros definimos nuestra interfaz donde especificamos que metodos deberan tener las clases que implementen esa interfaz, y cuando una clase implemente la interfaz debe tener obligatoriamente esos metodos.

//En programación orientada a objetos, una interfaz (también llamada protocolo) es un medio común para que los objetos no relacionados se comuniquen entre sí. Estas son definiciones de métodos y valores sobre los cuales los objetos están de acuerdo para cooperar.

//crear la interfaz con la palabra interface, aqui solo se declaran los metodos
interface Ordenador{

    public function encender();
    public function apagar();
    public function reiniciar();
    public function defragmentar();
    public function detectarUSB();

}

//implementamos la interfaz en una clase
class Mac implements Ordenador{

    private $modelo;

    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    //implementando los metodos de la interfaz
    public function encender()
    {
        return 'Soy un metodo de la interfaz';
    }

    public function apagar()
    {
        return 'Soy un metodo de la interfaz';
        
    }

    public function reiniciar()
    {
        return 'Soy un metodo de la interfaz';
        
    }

    public function defragmentar()
    {
        return 'Soy un metodo de la interfaz';
        
    }

    public function detectarUSB()
    {
        return 'Soy un metodo de la interfaz';
        
    }
}


//instancio la clase Mac
$macquintos=new Mac();
$macquintos->setModelo('Macbook Pro 2019');
echo $macquintos->getModelo();


var_dump($macquintos);






?>