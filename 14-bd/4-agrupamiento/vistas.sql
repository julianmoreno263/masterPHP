

/* 
Las vistas se pueden definir como una consulta almacenada en la bd que se utiliza como una tabla virtual y no almacena datos,utiliza asociaciones y los datos de las tablas originales de forma que siempre estan actualizadas.

Digamos que tenemos la consulta del inner join que habiamos echo antes, y lo necesitamos hacer varias veces(osea ejecutarlo varias veces), esto es muy pesado para el servidor.Entonces si el resultado de esa consulta mejor lo almaceno en una vista y esta almacenado virtualmente en la bd,tendre a la mano ese resultado y ademas actualizado, cuando necesite ese mismo resultado de esa consulta simplemente uso la vista y no tengo necesidad de estar ejecutando la consulta sql.

Ahora, para ver la vista no hay un comando como tal, si pongo show tables me aparece la vista porque es como una tabla virtual de la bd.Si quiero ejecutar la vista hago un select.Es mas facil operar con esta vista que estar ejecutando la consulta como tal,ademas sobre esa vista puedo trabajar y ejecutarla con otras condiciones adicionales como un where,etc.
*/


#creo la vista
create view entradas_con_nombre as 
select e.id,e.titulo,u.nombre as 'autor',c.nombre as 'categoria'
from entradas e
inner join usuarios u on e.usuario_id=u.id
inner join categorias c on e.categoria_id=c.id;

#ejecuto la vista
select * from entradas_con_nombre where autor='ingrid';

#borrar la vista
drop view entradas_con_nombre;

show tables;

