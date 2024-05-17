<?php 

class Database{

    public static function conectar(){

        $conexion=new mysqli('localhost','root','','notasMaster');
        $conexion->query("set names 'utf8'");

        return $conexion;
    }
}



?>