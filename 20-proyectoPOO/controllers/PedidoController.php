<?php 

require_once 'models/Pedido.php';

class PedidoController{

    public function hacer(){

        
        require_once 'views/pedido/hacer.php';
    }

    public function add(){
        if (isset($_SESSION['identity'])) {

            $usuario_id=$_SESSION['identity']->id;
            $provincia=isset($_POST['provincia']) ? $_POST['provincia']: false;
            $localidad=isset($_POST['localidad']) ? $_POST['localidad']: false;
            $direccion=isset($_POST['direccion']) ? $_POST['direccion']: false;

            $stats=Utils::statsCarrito();
            $coste=$stats['total'];

            if($provincia && $localidad && $direccion){
                //guardar datos en la bd
                $pedido=new Pedido();
                $pedido->setUsuario_id($usuario_id);
                $pedido->setProvincia($provincia);
                $pedido->setLocalidad($localidad);
                $pedido->setDireccion($direccion);
                $pedido->setCoste($coste);

                $save=$pedido->save();

                //guardar linea pedido
                $save_linea=$pedido->saveLinea();

                if ($save &&  $save_linea) {
                    $_SESSION['pedido']='complete';
                }else{
                    $_SESSION['pedido']='failed';
                }
                
            }else{
                $_SESSION['pedido']='failed';
            }

            header("Location:" . base_url . 'pedido/confirmado');

        }else{
            //redirigir al index
            header("Location:" . base_url);
        }
    }

    public function confirmado(){
        
        if (isset($_SESSION['identity'])) {
            $identity=$_SESSION['identity'];
            $pedido=new Pedido();
            $pedido->setUsuario_id($identity->id);
            $pedido=$pedido->getOneByUser();

            $pedidoProductos=new Pedido();
            $productos=$pedidoProductos->getProductsByPedido($pedido->id);

        }
        require_once 'views/pedido/confirmado.php';
    }

    public function misPedidos(){
        Utils::isIdentity();
        $usuario_id=$_SESSION['identity']->id;
        $pedido=new Pedido();

        //sacar los pedidos del usuario
        $pedido->setUsuario_id($usuario_id);
        $pedidos=$pedido->getAllByUser();

        require_once 'views/pedido/misPedidos.php';
    }

    public function detalle(){
        Utils::isIdentity();

        if (isset($_GET['id'])) {
            
            $id=$_GET['id'];

            //sacar el pedido
            $pedido=new Pedido();
            $pedido->setId($id);
            $pedido=$pedido->getOne();

            //sacar los productos
            $pedidoProductos=new Pedido();
            $productos=$pedidoProductos->getProductsByPedido($id);

            require_once 'views/pedido/detalle.php';

        }else{
            header("Location:" . base_url . 'pedido/misPedidos');
        }

    }

    public function gestion(){
        Utils::isAdmin();
        $gestion=true;

        $pedido=new Pedido();
        $pedidos=$pedido->getAll();

        require_once 'views/pedido/misPedidos.php';

    }

    public function estado(){
        Utils::isAdmin();
        if (isset($_POST['pedidoId']) && isset($_POST['estado'])) {
            //recoger datos del form
            $id=$_POST['pedidoId'];
            $estado=$_POST['estado'];

            //update del pedido
            $pedido=new Pedido();
            $pedido->setId($id);
            $pedido->setEstado($estado);
            $pedido->edit();

            header('Location:' . base_url . 'pedido/detalle&id=' . $id);

        }else{
            header('Location:' . base_url);
        }
    }
}


?>