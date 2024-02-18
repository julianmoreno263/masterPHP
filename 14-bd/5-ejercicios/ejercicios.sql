-- Active: 1705693636103@@127.0.0.1@3306@concesionario


#1-modificar la comision de los vendedores y ponerla al 0.5% cuando ganan mas de 50000
update vendedores set comision=0.5 where sueldo >=50000;

#2-incrementar el precio de los coches en un 5%
update coches set precio=precio*1.05;

#3-mostrar a todos los vendedores cuya fecha de alta sea anterior al 1 de julio de 2018
select * from vendedores where fechaAlta<'2024-02-18';
