<?php 

#1- crear un array con 8 numeros enteros, y hacer:

#- recorrelo y mostrarlo
#- ordenarlo y mostrarlo
#- mostrar su longitud
#- mostrar algun elemento especifico

#funcion para mostrar el array y hacer el codigo mas limpio
function mostrarArray($numeros){
    $resultado='';
    foreach ($numeros as $num) {
        //$resultado=$resultado . $num . '<br';
        $resultado .= $num . ' ';
    }

    return $resultado;
}

#----------------------------

$numeros=[3,67,4,28,11,2,90,13];

echo 'elementos del array' . '<br>';
echo mostrarArray($numeros);

echo '<hr>';

#---------------------------------


echo 'array ordenado' . '<br>';
asort($numeros);
echo mostrarArray($numeros);

echo '<hr>';

#---------------------------------

echo 'longitud del array' . '<br>';
echo count($numeros);

echo '<hr>';

#---------------------------------
$miNum=90;
echo "Busqueda del numero $miNum en el array" . '<br>';

$search=array_search($miNum,$numeros);
if(!empty($search)){
    echo "El numero $miNum existe en el array y esta en el indice $search";
}else{
    echo "El numero $miNum no existe en el array";
}

echo '<hr>';

#---------------------------------

#2- escribir un programa que agrege valores a un array mientras que su longitud sea menor a 120, y luego mostrarlo por pantalla
$miArray=[];

for ($i=0; $i <120 ; $i++) { 
    # code...
    array_push($miArray, " elemento-$i") . "<br>";
}

var_dump($miArray);

echo '<hr>';

#---------------------------------

#3- escribir un programa que compruebe si una variable esta vacia, si lo esta que la llene con texto en minusculas y la muestre pero con el texto en mayusculas y negrita
$texto="";

if(empty($texto)){

    $texto="esta es mi frase en mayusculas";
    echo "<strong>" . strtoupper($texto) . "</strong>";
}else{
    echo "La variable no esta vacia";
}


echo '<hr>';


#---------------------------------

/*5- crear un array con el contenido de esta tabla:Los indices seran las columnas de la tabla,y representar esta tabla en html,cada fila debe ir en un archivo separado(usar includes)

ACCION   AVENTURA   DEPORTES
GTA      ASSASAINS  FIFA 19
COD      CRASH      PES 19
PUGB     Prince
        of persia   MOTO GP 19

*/

$tabla=[
    "ACCION"=>array("GTA 5","Call of duty", "PUG"),
    "AVENTURA"=>array("ASSASAINS","CRASH", "Prince of persia"),
    "DEPORTES"=>array("FIFA 19","PES 19", "MOTO GP 19"),
];

#con array_keys me saca los indices de la tabla
$categorias=array_keys($tabla);

echo '<hr>';

?>

<table border="1">
   <?php include("ejercicios5/encabezados.php"); ?>
   <?php include("ejercicios5/primeraFila.php"); ?>
   <?php include("ejercicios5/segundaFila.php"); ?>
   <?php include("ejercicios5/terceraFila.php"); ?>
</table>