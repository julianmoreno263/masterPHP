/* crear tabla en sql, los nombres de las tablas van en plural */

create table usuarios(
    id int(11) AUTO_INCREMENT NOT NULL,
    nombre varchar(100) NOT NULL,
    apellidos varchar(100) DEFAULT'hola que tal',
    email varchar(100) NOT NULL,
    password varchar(100),
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);


