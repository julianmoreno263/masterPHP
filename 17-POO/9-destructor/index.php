<?php 

//destructores en php, son lo opuesto a los constructores,sirven para cuando ya no se va a usar mas un objeto se elimine ese objeto,oea se destruya, en este ejemplo creamos un objeto de la clase Usuario la cual tiene un constructor, al crearse ese objeto con new Usuario se muestra el mensaje del constructor(no se deben poner mensajes en el constructor,esto es solo por pedagogia) e inmediatamente despues como ya no hay nada mas despues del new, osea ya no se esta usando ese objeto, entra el destructor y lo destruye.

//si despues del new hay mas codigo, se ejecuta ese codigo y cuando php vea que ya se ejecuto todo y no se ha llamado mas al objeto entra a trabajar el destructor y lo elimina.Por ejemplo siu creamos un bucle despues del new este codigo se ejecutara, y despues de terminar se ejecuta el destructor.El destructor detecta cuando un objeto ya no se va a ejecutar y lo elimina.

//nota: php tiene varios metodos magicos(los que comienzan con doble guion bajo __), entre ellos esta el metodo __toString(), con este metodo podemos imprimir un objeto como si fuera un string, si por ejemplo queremos imprimir con un echo el objeto $usuario nos da un error que dice que no se puede imprimir en un string este objeto,pero si implementamos el metodo __toString() si lo permite.

class Usuario{

    public $nombre;
    public $email;

    //constructor
    public function __construct(){
        $this->nombre="Julian Moreno";
        $this->email="email@email.com";

        echo "<h2>Creando el objeto</h2> <br>";
    }

    public function __toString(){
        return "Hola {$this->nombre}, estás registrado con el email {$this->email} <br>";
    }

    public function __destruct(){
        echo "<h2>Destruyendo el objeto</h2>";
    }

}

//creo mis instancias
$usuario=new Usuario();

for ($i=0; $i <= 10; $i++) { 
    
    echo "{$i}"  . "<br>";
}

//con el metodo __toString() implementado ya podemos imprimir el objeto como un string
echo $usuario;

echo $usuario->email;

?>