-- Active: 1705693636103@@127.0.0.1@3306@blogmaster


#consulta con una condicion
SELECT * FROM usuarios WHERE email='email1@email.com';

/*

OPERADORES DE COMPARACION
igual             =
distinto         !=
menor            <
mayor            >
menor o igual    <=
mayor o igual    >=
entre            between A and B
en               IN
es nulo          is NULL
no nulo          is not NULL
como             LIKE
no es como       not like
*/


/*

OPERADORES LOGICOS

O  OR
Y  AND
NO NOT

*/

/*

COMODINES

cualquier cantidad de caracteres:  %
un caracter desconocido: _

*/

#ver usuarios con registro del 2020, year nos permite consultar solo por el year de la fecha
select * from usuarios where YEAR(fecha)=2020;

#ver los usuarios que no se registraron en el 2020
select * from usuarios where YEAR(fecha)!=2020;

#mostrar el email de los usuarios cuyo apellido tenga la letra 'a' y que su password sea 12345, esto lo hacemos usando el like y utilizando comodines como %, que indican que no importa lo que haya antes o despues de la condicion del like.
select email from usuarios where apellidos like '%a%';

#ver nombre y email de usuario donde su apellido tenga las letras 'ore'
select nombre,email from usuarios where apellidos like '%ore%';

#ver registros de usuarios con year par
select * from usuarios where (YEAR(fecha)%2=0);

#ver registros de usuarios con year impar
select * from usuarios where (YEAR(fecha)%2!=0);

#ver los registros de usuarios cuyo nombre tenga mas de 5 letras y se hayan registrado antes del 2021 y mostrar el nombre en mayusculas
select upper(nombre) as 'nombre',apellidos from usuarios where (length(nombre)>4) and (YEAR(fecha)<2021);


#order by permite ordenar los resultados d euna consulta por un campo especifico
select * from usuarios ORDER BY id desc;

#ordenar por fecha
select * from usuarios ORDER BY fecha asc;

#limit permite limitar la cantidad de registros en los resultados de una consulta
select * from usuarios LIMIT 2;

#al limit le puedo indicar un rango,osea desde cual hasta cual registro muestre(teniendo en cuenta que los registros se comienzan a contar desde cero)
select * from usuarios LIMIT 1,2;




