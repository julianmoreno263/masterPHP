<?php 

//conexion
$servidor='localhost';
$usuario='root';
$password='';
$basedatos='blogmaster';

$db=mysqli_connect($servidor,$usuario,$password,$basedatos);

mysqli_query($db,"set names 'utf8'");

//iniciar sesion
if(!isset($_SESSION)){
    session_start();
}





?>