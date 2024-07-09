<?php 

require_once "models/Producto.php";


class CarritoController{

    public function index(){

        $carrito=$_SESSION['carrito'];

        require_once 'views/carrito/index.php';
        
    }

    public function add(){

        if(isset($_GET['id'])){
            $producto_id= $_GET['id'];
        }else{
            header("Location:" . base_url);
        }
        
        if(isset($_SESSION['carrito'])){

            $counter=0;
            //aqui recorro lo que haya en el carrito de compras y saco su indice, dentro de este foreach lo que se hace es aumentar las unidades del producto,osea al adicionar un elemento al carrito y seguir dandole comprar,se iran aumentando las unidades de ese producto
            foreach ($_SESSION['carrito'] as $indice => $elemento) {
                if ($elemento['id_producto']==$producto_id) {
                    $_SESSION['carrito'][$indice]['unidades']++;
                    $counter++;
                }
            }

        }

        if (!isset($counter) || $counter==0) {

            //conseguir producto
            $producto=new Producto();
            $producto->setId($producto_id);
            $producto=$producto->getOne();
            
            //agregar al carrito
            if(is_object($producto)){

                $_SESSION['carrito'][]=array(

                    "id_producto"=>$producto->id,
                    "precio"=>$producto->precio,
                    "unidades"=>1,
                    "producto"=>$producto

                );
            }
             
        }

        header("Location:" . base_url . "carrito/index");

        
    }

    public function remove(){
        
    }

    public function deleteAll(){
        
        unset( $_SESSION['carrito']);
        header("Location:" . base_url . "carrito/index");
    }
}


?>