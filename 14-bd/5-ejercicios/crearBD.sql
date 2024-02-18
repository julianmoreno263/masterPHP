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
nombre VARCHAR(100) NOT NULL,
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

#coches
insert into coches values(null,'clio','Renault',12000,13);
insert into coches values(null,'panda','Seat',10000,10);
insert into coches values(null,'ranchera','Mercedes Benz',32000,24);
insert into coches values(null,'cayene','Porche',65000,5);
insert into coches values(null,'avendator','Lamborgini',17000,2);
insert into coches values(null,'spider','Ferrari',24500,80);

#grupos
insert into grupos values(null,'vendedores A','Madrid');
insert into grupos values(null,'vendedores B','Madrid');
insert into grupos values(null,'directores mecanicos','Madrid');
insert into grupos values(null,'vendedores A','Barcelona');
insert into grupos values(null,'vendedores B','Barcelona');
insert into grupos values(null,'vendedores C','Valencia');
insert into grupos values(null,'vendedores A','Bilbao');
insert into grupos values(null,'vendedores B','Pamplona');
insert into grupos values(null,'vendedores C','Santiago de compostela');

#vendedores
insert into vendedores values(null,1,null,'David','Lopez','responsable de tienda',CURDATE(),30000,4);
insert into vendedores values(null,1,1,'frank','martinez','ayudante de linea',CURDATE(),23000,2);
insert into vendedores values(null,2,null,'nelson','sanchez','responsable de tienda',CURDATE(),30000,4);
insert into vendedores values(null,3,null,'victor','Lopez','ayudante de tienda',CURDATE(),12000,3);
insert into vendedores values(null,4,null,'antonio','Lopez','mecanico jefe',CURDATE(),50000,4);
insert into vendedores values(null,5,null,'salvador','Lopez','vendedor de recambios',CURDATE(),13000,3);
insert into vendedores values(null,6,null,'joaquin','Lopez','ejecutivo de cuentas',CURDATE(),60000,2);
insert into vendedores values(null,6,8,'luis','Lopez','ayudante de tienda',CURDATE(),80000,2);

#clientes
insert into clientes values(null,1,'construcciones diaz','Alcobendas',24000,CURDATE());
insert into clientes values(null,1,'fruteria antonia','fuenlabrada',40000,CURDATE());
insert into clientes values(null,1,'imprenta martinez','barcelona',32000,CURDATE());
insert into clientes values(null,1,'jesus colchones','el prat',96000,CURDATE());
insert into clientes values(null,1,'bar pepe','valencia',17000,CURDATE());
insert into clientes values(null,1,'tienda pc inc','murcia',24500,CURDATE());

#encargos
insert into encargos values(null,1,1,2,CURDATE());
insert into encargos values(null,2,2,4,CURDATE());
insert into encargos values(null,3,3,1,CURDATE());
insert into encargos values(null,4,3,3,CURDATE());
insert into encargos values(null,5,5,1,CURDATE());
insert into encargos values(null,6,6,1,CURDATE());

select cantidad,nombre,modelo from encargos,clientes,coches where encargos.cliente_id=clientes.id AND
encargos.coche_id=coches.id;









