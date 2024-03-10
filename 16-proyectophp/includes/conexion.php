<?php 

//conexion
$servidor='localhost';
$usuario='root';
$password='';
$basedatos='blog';

$db=mysqli_connect($servidor,$usuario,$password,$basedatos);

mysqli_query($db,"set names 'utf8'");

//iniciar sesion
session_start();





?>