<?php 

namespace MisClases;

class Categoria{

    public $nombre;
    public $descripcion;

    public function __construct(){

        $this->nombre="acción";
        $this->descripcion="categoría enfocada a las reviews de videojuegosa de acción";
    }

}


?>