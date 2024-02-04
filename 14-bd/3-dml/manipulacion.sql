-- Active: 1705693636103@@127.0.0.1@3306@blogmaster

#lenguaje de manipulacion de datos(dml) con sql, instrucciones insert,update,select,etc

show tables;

#seleccionar registro
select * from usuarios;

#insertar registros
INSERT INTO usuarios (id,nombre,apellidos,email,pass,fecha)
VALUES(null,'sandra','corredor','email3@email.com','123456','2024-02-02');

#insertar un registro pero solo con unas columnas,debemos cambiar el not null de las columnas para que permitan datos nulos.

#seleccionar registros de una tabla,puedo mostrar todos los campos del registro con * o puedo indicarle los campos que quiero mostrar
SELECT * FROM usuarios;

#operadores aritmeticos en SQL,dentro de una consulta sql puedo hacer operaciones matematicas y mostrarlas,esto se hace entre parentesis, esa operacion aparecera en una columna nueva y le puedo poner un alias a esa columna.Con ORDER BY puedo ordenar los resultados por una columna en especifico,por ejemplo por el id, por defecto los saca de forma ascendente,osea de menor a mayor,pero le puedo indicar DESC para que los saque de mayor a menor
SELECT id,email,(4+7) as 'operacion' from usuarios ORDER BY id DESC;

#puedo hacer una operacion sumando una columna con un numero,por ejemplo sumarle a la columna id un numero
SELECT id,email,(id+7) as 'operacion' from usuarios;

#con sql tenemos funciones matematicas,por ejemplo podemos sacar valores absolutos,redondeaos,etc

#valor absoluto ABS
SELECT abs(7) as 'operacion' from usuarios;

#redondeo por arriba
SELECT ceil(7.45) as 'operacion' from usuarios;

#redondeo por debajo
SELECT floor(7.45) as 'operacion' from usuarios;

#numero pi
SELECT PI() as 'operacion' from usuarios;

#numeros aleatorios
SELECT rand() as 'operacion' from usuarios;

#raiz cuadrada
SELECT sqrt(7.45) as 'operacion' from usuarios;

#con truncate puedo quitar decimales,debo indicarle cuantos quiero
SELECT TRUNCATE(7.45, 1) as 'operacion' from usuarios;


#funciones para manipular texto

#sacar texto en mayuscula
select UPPER(nombre) from usuarios;

#sacar texto en minuscula
select LOWER(nombre) from usuarios;

#concatenar campos o variables
select CONCAT(nombre," ",apellidos) as 'conversion' from usuarios;

#puedo tener una funcion dentro de otra
select upper(CONCAT(nombre," ",apellidos)) as 'conversion' from usuarios;

#saber el numero de caracteres en la cadena de texto
select LENGTH(CONCAT(nombre," ",apellidos)) as 'conversion' from usuarios;

#anular espacios con la funcion trim()
select TRIM(CONCAT('    ', nombre," ",apellidos,'     ')) as 'conversion' from usuarios;

#puedo tener una funcion dentro de otra
select upper(CONCAT(nombre," ",apellidos)) as 'conversion' from usuarios;

#asi podemos actualizar un registro especifico con where
update  usuarios set fecha='2021-07-18' WHERE nombre='sandra'; 

#funciones para fechas

#mostrar fecha actual con CURDATE
select email,fecha, CURDATE() as fechaActual from usuarios;

#ver los dias de diferencia entre una fecha y otra
select email,DATEDIFF(fecha,CURDATE()) as fechaActual from usuarios;

#ver el nombre del dia de una fecha
select email,dayname(fecha) as fechaActual from usuarios;

#ver el dia del mes de una fecha
select email,DAYOFMONTH(fecha) as fechaActual from usuarios;

#ver mes de una fecha
select email,MONTH(fecha) as fechaActual from usuarios;

#ver fecha del sistema operativo
select email,SYSDATE() as fechaActual from usuarios;

#mostrar la fecha con otro formato,por ejemplo mostrarla como dia-mes-year.
select email,DATE_FORMAT(fecha,'%d-%m-%Y') as fechaActual from usuarios;

#funciones generales en SQL

#comprobar si hay registros nulos en un campo,sale 0 si es false y 1 si es true
SELECT email, ISNULL(apellidos) from usuarios;

#comprobar si dos strings son iguales o diferentes. STRCMP() devuelve 0 si las cadenas son iguales, -1 si el primer argumento es menor que el segundo, según el orden de ordenamiento de cadenas actual, y 1 en otro caso
select email,STRCMP('email1@email.com','email1@email.com') from usuarios;

#ver la version de mysql,se debe hacer desde una consulta
select VERSION() from usuarios;

#ver el usuario de la bd
select USER() from usuarios;

#con ifnull puedo ver si un campo tiene registros vacios, y puedo pasar un string por DEFAULT
select ifnull(apellidos,'este campo esta vacio') from usuarios;




     

