<?php 

#un array es una coleccion de elementos con un unico nombre almacenados en forma de matriz.Para acceder a estos elementos se utiliza el indice de los elementos.Los arrays pueden almacenar datos de diferente tipo.

#declaracion del array
$peliculas=["batman","spider-man","superman"];
$cantantes=["shakira","karol-g","jenifer lopez"];

#para mostrar un array en pantalla podemos utilizar var_dump()
var_dump($peliculas);
var_dump($cantantes);

echo "<hr>";

#capturar un elemento del array
print($peliculas[1] . "<br>");

echo "<hr>";

#-----------------------------------------------------------------

#para recorrer un array usamos los bucles,en el for podemos usar el metodo count() para armar la condicion del bucle.
echo "Listado de peliculas <br>";

echo "<ul>";
for ($i=0; $i < count($peliculas) ; $i++) { 
    echo "<li>" . $peliculas[$i] . "</li>";
};
echo "</ul>";

echo "<hr>";

#-----------------------------------------------------------------

#bucle for each para recorrer los arrays
echo "Listado de cantantes <br>";

echo "<ul>";
foreach ($cantantes as $cantante) {
    echo "<li>" . $cantante . "</li>";
}
echo "</ul>";


echo "<hr>";

#-----------------------------------------------------------------

#arrays asociativos son los que emplean parejas de clave-valor para sus elementos,asocian una clave para cada valor.

$nombres=[
    "nombre"=>"julian",
    "apellido"=>"Moreno",
    "edad"=>45,
    "email"=>"julianmoreno@.com"
];

var_dump($nombres);

#si quiero acceder a un valor especifico le paso la clave
echo($nombres["nombre"]);


echo "<hr>";

#-----------------------------------------------------------------

#arrays multidimensionales son arrays que tienen arrays anidados,osea un array con mas arrays dentro de el.

$contactos=[
    array(
        'nombre'=>'antonio',
        'email'=>'antonio@email.com'
    ),
    array(
        'nombre'=>'sandra',
        'email'=>'sandra@email.com'
    ),
    array(
        'nombre'=>'ingrid',
        'email'=>'ingrid@email.com'
    )
];

#cada indice del array sera otro array
var_dump($contactos);

#si quiero acceder al nombre del segundo array,osea al indice 1 del array contactos lo referencio asi
echo $contactos[1]['nombre'];

#para recorrer este array asociativo
foreach ($contactos as $key => $contacto) {
    var_dump($contacto['nombre']);
}

echo "<hr>";







?>