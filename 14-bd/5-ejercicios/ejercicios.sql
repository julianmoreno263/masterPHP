-- Active: 1705693636103@@127.0.0.1@3306@concesionario


#1-modificar la comision de los vendedores y ponerla al 0.5% cuando ganan mas de 50000
update vendedores set comision=0.5 where sueldo >=50000;

#2-incrementar el precio de los coches en un 5%
update coches set precio=precio*1.05;

#3-mostrar a todos los vendedores cuya fecha de alta sea anterior al 1 de julio de 2018
select * from vendedores where fechaAlta<'2024-02-18';

#4-listar todos los vendedores y para cada vendedor mostrar su nombre y el numero de dias que llevan en el concesionario. datediff() cuenta la diferencia entre la primera fecha(osea la actual con el curdate y la fechaAlta,ose la fecha de registro del vendedor)
select nombre, DATEDIFF(curdate(),fechaAlta) as 'dias' from vendedores;

#5-visualizar el nombre y apellido de los vendedores en una misma columna y su fecha de registro y el dia de la semana en la que se registraron
select CONCAT(nombre, " ", apellidos) as 'nombre y apellidos',fechaAlta,dayname(fechaAlta) from vendedores;

#6-mostrar el nombre y el salario de los vendedores con cargo de ayudante de tienda
select nombre,sueldo from vendedores where cargo='ayudante de tienda';

#7-mostrar todos los coches en cuya marca exista la letra 'a' o que el modelo empiece por 'r' 
select * from coches where marca like '%R%' or modelo like 'r%';

#8-mostrar todos los vendedores del grupo numero 1 ordenados por salarios de mayor a menor
select * from vendedores where grupo_id=1 order by sueldo desc;

#9-mostrar los apellidos de los vendedores, fecha y numero de grupo, ordenados por fecha descendente y mostrar los 4 ultimos
select apellidos,fechaAlta,grupo_id from vendedores order by `fechaAlta` desc limit 4;

#10-mostrar todos los cargos de los vendedores y el numero de vendedores en cada cargo.
select cargo, count(id) from vendedores group by cargo;

#11-conseguir la masa salarial(anual) del concesionario(osea lo que gasta la empresa en salarios en un year,la suma de los sueldos)
select sum(sueldo) as 'Masa salarial' from vendedores; 

#12-sacar la media de sueldos entre todos los vendedores por grupo
select avg(sueldo) as 'promedio salarial',grupo_id from vendedores group by grupo_id;

#13-mostrar las unidades totales vendidas de cada coche a cada cliente mostrando el nombre del coche,nombre del cliente y suma de unidades
select co.modelo as 'coche',cl.nombre as 'cliente', sum(cantidad) as 'unidades' from encargos e
inner join coches co on co.id=e.coche_id
inner join clientes cl on cl.id=e.cliente_id
group by e.coche_id, e.cliente_id;

#14-mostrar los clientes que mas encargos han echo y mostrar cuantos encargos hicieron. Cuando ponemos order by 2 por ejemplo,queremos decir que vamos a ordenar por la columna 2 que estamos mostrando,en este caso la columna 1 sera cliente_id y la 2 sera el id del encargo.
select c.nombre, count(e.id) from encargos e
inner join clientes c on c.id=e.cliente_id
group by cliente_id order by 2 desc limit 2;

#15-obtener listado de clientes atendidos por el vendedor 'David Lopez',para esto hacemos una subconsulta
select * from clientes where vendedor_id in (select id from vendedores where nombre='David' and apellidos='Lopez');

#16-obtener un listado con los encargos realizados por el cliente 'fruteria antonia'
select e.id as 'numero encargo', cantidad,c.nombre,co.modelo,e.fecha from encargos e 
inner join clientes c on c.id=cliente_id
inner join coches co on co.id=e.coche_id
where e.cliente_id in (select id from clientes where nombre='fruteria antonia');

#17-mostrar los clientes que han echo algun encargo del coche 'ranchera'
select * from clientes where id in (select cliente_id from encargos where coche_id IN
(select id from coches where modelo like '%ranchera%'));

#18-obtener los vendedores con 2 o mas clientes
select * from vendedores where id in (select vendedor_id from clientes group by vendedor_id having count(id)>=2);

#19-seleccionar el grupo en el que trabaja el vendedor con mayor salario y mostrar el nombre del grupo. El 'in' antes de las subconsultas significa 'existe', osea podemos traducirlo por ejemplo como 'donde el id existe en la subconsulta...'
select * from grupos where id in (select grupo_id from vendedores
where sueldo=(select max(sueldo) from vendedores));

#20-obtener los nombres y ciudades de los clientes con encargos de 3 unidades en adelante
select nombre, ciudad from clientes where id in (select cliente_id from encargos where cantidad>=3);

#21-mostrar listado de clientes mostrando el numero de cliente y el nombre y tambien el numero del vendedor y su nombre
select c.id, c.nombre,v.id,concat(v.nombre, ' ', v.apellidos) as vendedor from clientes c,vendedores v
where c.vendedor_id=v.id;

#22-listar todos los encargos realizados con la marca del coche y el nombre del cliente(lo hice de dos formas)
/* select co.marca,c.nombre from encargos e,coches co, clientes c 
where e.coche_id=co.id and e.cliente_id=c.id; */

select e.id,co.marca,c.nombre from encargos e
inner join coches co on co.id=e.coche_id
inner join clientes c on c.id=e.cliente_id;

#23-listar los encargos con el nombre del coche, nombre del cliente y el nombre de la ciudad, pero solo de barcelona
select e.id,co.modelo,c.nombre,c.ciudad from encargos e
inner join coches co on co.id=e.coche_id
inner join clientes c on c.id=e.cliente_id
where c.ciudad='barcelona';

#24-obtener una lista de los nombres de los clientes con el importe de sus encargos acumulados
select c.nombre,sum(precio*cantidad) as importe from clientes c
inner join encargos e on c.id=e.cliente_id
inner join coches co on e.coche_id=co.id
group by c.nombre
order by 2;

#25-sacar vendedores que tiene jefe y mostrar el nombre del jefe
select v1.nombre as vendedor,v2.nombre as jefe from vendedores v1
inner join vendedores v2 on v1.jefe=v2.id;

#26-ver los nombres de los clientes y la cantidad de encargos realizados incluyendo los que no han realizado encargos
select c.nombre,e.cantidad from clientes c
left join encargos e on c.id=e.cliente_id
group by 1;

#27-listar todos los vendedores y el numero de clientes de cada vendedor tengan o no clientes
select v.nombre,v.apellidos,count(c.id) as 'numero clientes' from vendedores v
left join clientes c on c.vendedor_id=v.id
group by v.id;

#28-crear una vista llamada 'vendedoresA' que muestre todos los vendedores del grupo llamado 'vendedores A'
create view vendedoresA as select * from vendedores 
where grupo_id in (select id from grupos where nombre='vendedores A');

select * from vendedoresA;


#29-mostrar los datos del vendedor con mas antiguedad en el consecionario
select * from vendedores ORDER BY fechaAlta ASC LIMIT 1;

#30-obtener el coche con mas unidades vendidas
select * from coches where id=(select coche_id from encargos order by cantidad desc limit 1);



