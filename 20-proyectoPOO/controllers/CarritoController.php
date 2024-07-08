<?php 

require_once "models/Producto.php";


class CarritoController{

    public function index(){

        echo 'Controlador de carrito';
    }

    public function add(){

        if(isset($_GET['id'])){
            $producto_id= $_GET['id'];
        }else{
            header("Location:" . base_url);
        }
        
        if(isset($_SESSION['carrito'])){

        }else{

            //conseguir producto
            $producto=new Producto();
            $producto->setId($producto_id);
            $producto=$producto->getOne();
            
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