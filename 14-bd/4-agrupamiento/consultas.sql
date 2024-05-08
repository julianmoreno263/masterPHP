-- Active: 1705693636103@@127.0.0.1@3306@blogmaster


#consultas de agrupamiento en SQL(permiten agrupar filas).La sentencia GROUP BY identifica una columna seleccionada para utilizarla para agrupar resultados. Divide los datos en grupos por los valores de la columna especificada, y devuelve una fila de resultados para cada grupo(osea solo muestra un registro por cada grupo). Puede utilizar GROUP BY con más de un nombre de columna (separe los nombres de columna con comas).En este primer ejemplo agrupamos por categoria_id, como solo existen esas 3 categorias(osea solo hay esos 3 grupos) solo muestra un registro por grupo,es por eso que solo muestra esos unicos 3 registros del primer usuario con id 2, aunque hay mas usuarios solo se muestra un registro por grupo.
select titulo,categoria_id from entradas GROUP BY categoria_id;


#el group by es solo para agrupar,no muestra todos los registros,solo agrupa registros en base a un campo, entonces si por ejemplo queremos ver cuantas entradas hay de cada categoria podemos usar la funcion count()
select count(titulo) as 'numero entradas',categoria_id from entradas GROUP BY categoria_id;

/* cuando hacemos consultas de agrupamiento no se utiliza el where si se quiere hacer una condicion,porque el where actua sobre una columna y no sobre un grupo, si quiero poner una condicion en una consulta de agrupamiento debo utilizar la clausula HAVING, por ejemplo si quiero mostrar el o los grupos que sean mayores o iguales a 3 utilizo el having. */

select count(titulo) as 'numero entradas',categoria_id from entradas GROUP BY categoria_id  HAVING COUNT(titulo)>=3;

/* 
funciones de agrupamiento

AVG  sacar la media
COUNT  contar el numero de elementos
MAX  valor maximo del grupo
MIN valor minimo del grupo
SUM  sumar todo el contenido del grupo

*/

#sacar la media de las entradas que tengo
select AVG(id) as 'Media de entradas' from entradas;

#sacar el usuario con el id mas grande
select MAX(id) as 'Maximo id',titulo from entradas;

#sacar el usuario con el id mas bajo
select MIN(id) as 'Minimo id',titulo from entradas;

#sacar la suma de todos los ids 
select sum(id) as 'Suma de ids' from entradas;





