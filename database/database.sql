CREATE DATABASE tareas;
USE tareas;
CREATE TABLE tareas.t_usuarios (
  id_usuarios INT(11) NOT NULL AUTO_INCREMENT,
  usuario VARCHAR(245) NOT NULL,
  password VARCHAR(245) NOT NULL,
  nombre VARCHAR(245) NOT NULL,
  apellido_paterno VARCHAR(245) NOT NULL,
  apellido_materno VARCHAR(245) NOT NULL,
  PRIMARY KEY (id_usuarios));
#estado_asignacion
# 1 Por asignar
# 2 Asignado
# 3 Finalizado
CREATE TABLE tareas.t_asignacion_tarea (
  id_asignacion_tarea INT NOT NULL AUTO_INCREMENT,
  nombre_asignacion VARCHAR(245) NOT NULL,
  estado_asignacion INT(2) NOT NULL,
  nombre_materia VARCHAR(245) NOT NULL,
  requisitos_tarea VARCHAR(245) NOT NULL,
  fecha_inicio DATE NOT NULL,
  fecha_final DATE NOT NULL,
  fk_usuarios INT(5) NOT NULL,
  fecha_insercion DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (id_asignacion_tarea));

ALTER TABLE tareas.t_cat_asignacion_tarea
ADD INDEX fk_usuario_idx (fk_usuarios ASC);
;
ALTER TABLE tareas.t_cat_asignacion_tarea
ADD CONSTRAINT fk_usuario
  FOREIGN KEY (fk_usuarios)
  REFERENCES tareas.t_usuarios (id_usuarios)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
