CREATE DATABASE tareas;
USE tareas;
CREATE TABLE tareas.t_usuarios (
  id_usuarios INT(11) NOT NULL AUTO_INCREMENT,
  fk_registro_tareas INT(2) NOT NULL,
  usuario VARCHAR(245) NOT NULL,
  password VARCHAR(245) NOT NULL,
  nombre VARCHAR(245) NOT NULL,
  apellido_paterno VARCHAR(245) NOT NULL,
  apellido_materno VARCHAR(245) NOT NULL,
  PRIMARY KEY (id_usuarios));
CREATE TABLE tareas.t_registro_tareas (
  id_tareas INT NOT NULL AUTO_INCREMENT,
  estado_tarea VARCHAR(245) NOT NULL,
  nombre_tarea VARCHAR(245) NOT NULL,
  ruta_tarea VARCHAR(245) NOT NULL,
  comentarios_tarea VARCHAR(245) NOT NULL,
  insersion_tarea DATETIME NULL DEFAULT now(),
  PRIMARY KEY (id_tareas));
ALTER TABLE tareas.t_usuarios
ADD INDEX fk_tareas_idx (fk_registro_tareas ASC);
;
ALTER TABLE tareas.t_usuarios 
ADD CONSTRAINT fk_tareas
  FOREIGN KEY (fk_registro_tareas)
  REFERENCES tareas.t_registro_tareas (id_tareas)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;



INSERT INTO t_usuarios(usuario,password,nombre,apellido_parerno,apellido_materno) 
VALUES ("PiTherDG","7110eda4d09e062aa5e4a390b0a572ac0d2c0220","pedro","jimenez","garita");