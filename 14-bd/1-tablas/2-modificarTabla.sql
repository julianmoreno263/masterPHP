#renombrar una tabla con alter table
ALTER TABLE usuarios RENAME TO usuarios_renom;

#cambiar el nombre de una columna,por ejemplo de apellidos a apellido
ALTER TABLE usuarios_renom CHANGE apellidos apellido VARCHAR(100) NULL;

#modificar columna sin cambiar su nombre
ALTER TABLE usuarios_renom MODIFY apellido CHAR(50) NOT NULL;

#agregar columna nueva a una tabla
ALTER TABLE usuarios_renom ADD website VARCHAR(100) NOT NULL;

#agregar restriccion a una columna
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

#borrar una columna
ALTER TABLE usuarios_renom DROP website;

DESC usuarios_renom;
