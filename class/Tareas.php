<?php
    class Tareas {
        public function mostrar_asignacion_tareas($sql){
            $C = new Conector();
            $conexion = $C->conexion();
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