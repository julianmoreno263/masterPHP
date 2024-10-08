<?php 

//si quiero cargar en este index las clases que cree en los demas archivos, debo utilizar un require o un include para poder usarlas.Esto puede ser tedioso si tenemos muchos archivos y necesitamos usarlos en varios lados,tendriamos que estar escribiendo los require varias veces, para mejorar esto se usa el autoload,o lo que es lo mismo, crear un archivo php que tenga una funcion que reciba como parametro la clase que se necesita usar y junto con el metodo spl_autoload_register() podemos cargar las clases que yo tenga de forma automatica,si las quiero usar aqui en este index solo cargo ese archivo autoload y el automaticamente cargar todas las clases,en si es como abreviar los require.

// require_once "clases/usuario.php";
// require_once "clases/categoria.php";
// require_once "clases/entrada.php";

require_once "autoload.php";

// $usuario=new Usuario();
// $categoria=new Categoria();
// $entrada=new Entrada();

// echo $usuario->nombre . "<br>";
// echo $categoria->descripcion . "<br>";
// echo $entrada->titulo . "<br>";


//namespace y paquetes, el namespace sirve para agrupar las clases que yo tenga y que sean comunes dentro de un paquete,de esta forma el codigo queda mas ordenado.Como creamos esa carpeta misClases(ese sera el paquete) asi mismo se escribe la ruta para que el autoload pueda encontrar los archivos,para no estar escribiendo cada vez la ruta cuando necesitamos crear un objeto de una clase podemos llamarla usando la palabra reservada "use" para traer el espacio de nombre, y ademas podemos hacerlo todo en una sola linea.Ademas si tenemos varios paquetes podemos utilizarlos siempre que llamemos a sus namespaces, pueden haber clases con el mismo nombre siempre que esten en diferentes paquetes,pero para llamar a esa clase que tiene un mismo nombre la debemos renombrar sino sale un error,le podemos poner un alias.

use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal{

    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct(){

        $this->usuario=new Usuario();
        $this->categoria=new Categoria();
        $this->entrada=new Entrada();

    }

    /**
     * Get the value of usuario
     */ 
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */ 
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    //en php tenemos varias constantes de clases que nos permiten tener informacion especifica de las propiedades y metodos de una clase,usaremos el metodo informacion() de la clase principal para llamar desde alli a estoas constantes.
    public function informacion(){

        // echo __CLASS__;//asi vemos a que clase pertenece este metodo
        // echo __METHOD__;//asi vemos como se llama el metodo
        echo __FILE__;//asi saca la ruta del archivo donde esta este metodo
    }

    

}


$principal=new Principal();
$usuario=new UsuarioAdmin();

$principal->informacion();

echo "<hr>";

var_dump($principal);
echo "<hr>";
var_dump($usuario);
echo "<hr>";

//comprobar si una clase existe con el metodo class_exists(), esto busca en el autoload,busca los namespaces que hayan, entonces toca pasarle bien definida la ruta de la clase que queremos buscar. A la funcion le puedo poner una @ para evitar que salgan los errores del servidor
$clase=@class_exists("MisClases\Usuario");
if($clase){
    echo "<h1>La clase si existe...</h1>";
}else{
    echo "<h1>La clase no existe...</h1>";
}

echo "<hr>";


//con el metodo get_class_method() puedo encontrar los metodos que tenga una clase, esto lo saca en un array
var_dump(get_class_methods($principal));




?>