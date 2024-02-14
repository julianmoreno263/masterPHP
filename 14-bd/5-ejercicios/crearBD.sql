-- Active: 1705693636103@@127.0.0.1@3306@concesionario


/* 
Bloque de ejercicios con sql, crearemos una bd de un concesionario
*/

create table coches(
id int(10) AUTO_INCREMENT NOT NULL,
modelo VARCHAR(100) NOT NULL,
marca VARCHAR(50),
precio int(20) NOT NULL,
stock int(255) NOT NULL,
CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE=INNODB;

create table grupos(
id int(10) AUTO_INCREMENT NOT NULL,
nombre VARCHAR(50) NOT NULL,
ciudad VARCHAR(50),
CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=INNODB;

create table vendedores(
id int(10) AUTO_INCREMENT NOT NULL,
grupo_id int(10) NOT NULL,
jefe int(10),
nombre VARCHAR(100) NOT NULL,
apellidos VARCHAR(100),
cargo VARCHAR(50),
fechaAlta date,
sueldo float(20,2),
comision float(10,2),
CONSTRAINT pk_vendedores PRIMARY KEY(id),
CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)#clave reflexiva,apunta a la misma tabla
)ENGINE=INNODB;

create table clientes(
id int(10) AUTO_INCREMENT NOT NULL,
vendedor_id int(10) NOT NULL,
nombre int(100) NOT NULL,
ciudad VARCHAR(100),
gastado float(50,2),
fecha date,
CONSTRAINT pk_clientes PRIMARY KEY(id),
CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=INNODB;

create table encargos(
id int(10) AUTO_INCREMENT NOT NULL,
cliente_id int(10) NOT NULL,
coche_id int(10) NOT NULL,
cantidad int(100),
fecha date,
CONSTRAINT pk_encargos PRIMARY KEY(id),
CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=INNODB;

SHOW tables;

#llenar la bd con informacion

