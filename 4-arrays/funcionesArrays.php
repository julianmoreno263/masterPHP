<?php 

#vamos  aver las funciones para trabajar con los arrays en php

$cantantes=["shakira","karol-g","jenifer lopez","antonio"];
$numeros=[1,45,3,6,32,12];

#asort() ordena el array alfabeticamente,si el array es numerico tambien los organiza de menor a mayor
asort($cantantes);
asort($numeros);
var_dump($cantantes);
var_dump($numeros);


echo '<hr>';

#arsort() ordena el array alfabeticamente pero de forma inversa
arsort($cantantes);
var_dump($cantantes);

echo '<hr>';

#puedo agregar elementos a un array asi
$cantantes[]='paola';

#pero tambien puedo utilizar la funcion array_push() para lo mismo
array_push($cantantes,'maelo');
var_dump($cantantes);

echo '<hr>';

#puedo eliminar elementos con array_pop(), esto elimina el ultio indice
array_pop($cantantes);

#puedo eliminar un indice en concreto con unset() y le paso el indice del array
unset($cantantes[2]);
var_dump($cantantes);

#puedo ir sacando los indices del array de forma aleatorioa con array_rand() y despues ese indice aleatorio lo puedo manipular segun lo que quiera hacer
$indice=array_rand($cantantes);
echo $cantantes[$indice];

echo '<hr>';

#puedo darle la vuelta a un array con array_reverse(),lo debo guardar en una variable para que se muestre inverso,o con var_dump.
var_dump(array_reverse($numeros));

echo '<hr>';

#con array_search() puedo buscar un elemento en un array.Si no esta saca false.
$resultado=array_search('paola',$cantantes);
var_dump($resultado);#aqui me muestra el indice de ese elemento

echo '<hr>';

#con count() me saca el numero de elementos del array,sirve cuando estamos iterando sobre un array.Con sizeof() podemos hacer lo mismo.
echo count($cantantes) . '<br>';
echo sizeof($cantantes);

echo '<hr>';



?>