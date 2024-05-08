-- Active: 1705693636103@@127.0.0.1@3306@blogmaster
/* 
consultas multitabla son consultas que sirven para consultar varias tablas en una sola sentencia

*/

#mostrar las entradas con el nombre del autor y la categoria, que son datos que estan en tablas diferentes, para esto puedo crearles un alias a cada campo que necesito ver

select e.id, e.titulo,u.nombre as 'autor',c.nombre as 'categoria'
from entradas e, usuarios u, categorias c
where e.usuario_id=u.id and e.categoria_id=c.id;

#hacemos este mismo ejercicio pero usando inner join(unir internamente), porque al hacerlo como lo hicimos anteriormente se estan recorriendo todas las tablas y eso puede resultar muy costoso en rendimiento
select e.id,e.titulo,u.nombre as 'autor',c.nombre as 'categoria'
from entradas e
inner join usuarios u on e.usuario_id=u.id
inner join categorias c on e.categoria_id=c.id;

#mostrar el nombre de las categorias y al lado cuantas entradas tienen
select c.nombre, count(e.id) from categorias c, entradas e
where e.categoria_id=c.id GROUP BY e.categoria_id;

#este mismo ejercicio con left join, para que muestre todas las categorias,porque en este momento de la categoria plataformas no hay entradas entonces con un inner join no la muestra, el left join indica que mantenga las filas de la tabla que tenga a la izquierda del left join(osea la tabla categorias) y se una con la tabla a su derecha(osea la tabla entradas) y aplique la condicion del on.Tambien existe el right join que mantiene las filas de la tabla a la derecha.
select c.nombre, count(e.id) from categorias c
LEFT join entradas e on e.categoria_id=c.id
GROUP BY e.categoria_id;


#mostrar el email de los usuarios y al lado cuantas entradas tienen
select u.email,count(titulo) from usuarios u, entradas e
where e.usuario_id=u.id GROUP BY e.usuario_id;

