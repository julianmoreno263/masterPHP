-- Active: 1705693636103@@127.0.0.1@3306@blogmaster



#subconsultas, son consultas dentro de otra consulta, consiste en utilizar el resultado de la subconsulta para operar en la consulta principal jugando con las claves ajenas.

#vamos a sacar solo los usuarios que tienen entradas creadas, entonces esta consulta requiere de una subconsulta utilizando la llave foranea que relacione los campos que necesitamos en esas tablas, esta consulta s epuede interpretar asi:  "seleccionar todos los usuarios de la tabla usuarios donde su id ESTE EN el campo usuario_id de la tabla entradas".Utilizamos IN o NOT IN cuando sabemos que la consulta arrojara varios resultados.
select * from usuarios where id IN (select usuario_id from entradas);

#si quiero hacer lo contrario,osea sacar los usurios que no tienen entradas seria asi:
select * from usuarios where id NOT IN (select usuario_id from entradas);

#sacar el nombre y apellido de los usuarios que tengan alguna entrada que en su titulo hable de GTA
select nombre,apellidos from usuarios 
where id in (select usuario_id from entradas where titulo like "%GTA%");

#sacar todas las entradas de la categoria accion utilizando su nombre
select categoria_id,titulo from entradas where categoria_id in (select id from categorias where nombre='accion');

#mostrar las categorias con 3 o mas entradas
select nombre from categorias 
where id in (select categoria_id from entradas group by categoria_id having count(categoria_id)>=3);


#mostrar los usuarios que crearon una entrada un domingo(en el formato de fecha americano los dias se comienzan a contar a partir del domingo,osea el domingo es el dia 1)
select * from usuarios where id in (select usuario_id from entradas where DAYOFWEEK(fecha)=1);


#mostrar el nombre del usuario que tenga mas entradas
select concat(nombre," ", apellidos) as "El usuario con mas entradas" from usuarios 
where id =(select usuario_id from entradas group by usuario_id ORDER BY count(id) desc limit 1);


#mostrar las categorias sin entradas
select * from categorias 
where id not in (select categoria_id from entradas);

