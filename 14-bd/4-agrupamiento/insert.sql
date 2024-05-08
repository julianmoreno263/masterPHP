-- Active: 1705693636103@@127.0.0.1@3306@blogmaster


#INSERTS PARA CATEGORIAS
INSERT INTO categorias (id,nombre) VALUES(null,'accion');
INSERT INTO categorias (id,nombre) VALUES(null,'rol');
INSERT INTO categorias (id,nombre) VALUES(null,'deportes');

#INSERTS PARA ENTRADAS
insert into entradas (id,usuario_id,categoria_id,titulo,descripcion,fecha)
values(null,2,1,'Novedades GTA5','review del gta5',CURDATE());

insert into entradas (id,usuario_id,categoria_id,titulo,descripcion,fecha)
values(null,2,2,'Mario bros','todo sobre mario',CURDATE());

insert into entradas (id,usuario_id,categoria_id,titulo,descripcion,fecha)
values(null,2,3,'Novedades GTA5','review del gta5',CURDATE());

#----------------------------------------------------------

insert into entradas (id,usuario_id,categoria_id,titulo,descripcion,fecha)
values(null,3,1,'assasins','todo sobre assasins',CURDATE());

insert into entradas (id,usuario_id,categoria_id,titulo,descripcion,fecha)
values(null,3,2,'wow','nuevos jugadores de wow',CURDATE());

insert into entradas (id,usuario_id,categoria_id,titulo,descripcion,fecha)
values(null,3,3,'pes19','nuevos jugadores de pes19',CURDATE());

#----------------------------------------------------------

insert into entradas (id,usuario_id,categoria_id,titulo,descripcion,fecha)
values(null,4,1,'simulator','todo sobre simulator',CURDATE());

insert into entradas (id,usuario_id,categoria_id,titulo,descripcion,fecha)
values(null,4,2,'pacman','nuevos jugadores de pacman',CURDATE());

insert into entradas (id,usuario_id,categoria_id,titulo,descripcion,fecha)
values(null,4,3,'mosquitos','nuevos jugadores de mosquitos',CURDATE());
