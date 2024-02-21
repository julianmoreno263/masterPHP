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