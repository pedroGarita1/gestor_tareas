<?php
    class Tareas {
        public function mostrar_asignacion_tareas($nombre_usuario){
            $C = new Conector();
            $conexion = $C->conexion();
            $sql_usuario = "SELECT id_usuarios FROM t_usuarios WHERE usuario = '$nombre_usuario'";
            $query = mysqli_query($conexion,$sql_usuario);
            $id_usuarios = mysqli_fetch_row($query);

            $sql = "SELECT id_asignacion_tarea, nombre_asignacion, estado_asignacion, nombre_materia, requisitos_tarea, fecha_final, estado_tarea FROM t_registro_tareas INNER JOIN t_cat_asignacion_tarea ON t_registro_tareas.fk_asignacion_tarea = t_cat_asignacion_tarea.id_asignacion_tarea WHERE fk_usuarios = $id_usuarios[0]";
            $resultado = mysqli_query($conexion,$sql);
            $fetch = mysqli_fetch_all($resultado,MYSQLI_ASSOC);
            return $fetch;
        }
        public function insertar_por_id($sql){
            $C = new Conector();
            $conexion = $C->conexion();
            $resultado = mysqli_query($conexion,$sql);
            $ver=mysqli_fetch_row($resultado);
            $ver;
        }
        public function finalizar_asignacion_tareas(){
            
        }
    }
?>