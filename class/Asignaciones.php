<?php
    class Asignaciones {
        public function insertar_asignacion($datos, $nombre_usuario){
            $c = new Conector();
            $conexion = $c->conexion();
            $consulta = "SELECT id_usuarios FROM t_usuarios WHERE usuario = '$nombre_usuario'";
            $resultado = mysqli_query($conexion, $consulta);
            $id_usuario = mysqli_fetch_row($resultado);

            $insersion = "INSERT INTO t_asignacion_tarea(nombre_asignacion, estado_asignacion, nombre_materia, requisitos_tarea, fecha_inicio, fecha_final, fk_usuarios)
                        VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$id_usuario[0]')";
            $resultado_insersion = mysqli_query($conexion, $insersion);
            return $resultado_insersion;
        }
        public function mostrar_asignacion($nombre_usuario){
            $c = new Conector();
            $conexion = $c->conexion();
            $consulta = "SELECT id_usuarios FROM t_usuarios WHERE usuario = '$nombre_usuario'";
            $resultado = mysqli_query($conexion, $consulta);
            $id_usuario = mysqli_fetch_row($resultado);

            $sql = "SELECT * FROM t_asignacion_tarea WHERE fk_usuarios = $id_usuario[0]";
            $resultado = mysqli_query($conexion,$sql);
            $fetch = mysqli_fetch_all($resultado,MYSQLI_ASSOC);
            return $fetch;
        }
        public function actualizar_asignacion($datos){
            $c = new Conector();
            $conexion = $c->conexion();
            $update = "UPDATE t_asignacion_tarea SET nombre_asignacion = '$datos[0]',estado_asignacion = '$datos[1]',requisitos_tarea = '$datos[3]', nombre_materia = '$datos[2]',fecha_inicio = '$datos[4]', fecha_final ='$datos[5]' WHERE id_asignacion_tarea = '$datos[6]'";
            $resultado = mysqli_query($conexion, $update);
            return $resultado;
        }
        public function finalizar_asignacion($id_asignacion, $estado_asignacion){
            $c = new Conector();
            $conexion = $c->conexion();
            $update = "UPDATE t_asignacion_tarea SET estado_asignacion = '$estado_asignacion' WHERE id_asignacion_tarea = '$id_asignacion'";
            $resultado = mysqli_query($conexion, $update);
            return $resultado;
        }
        public function asignar_nuevamente($id_asignacion){
            $fecha_actual = strtotime(date("y-m-d"));
            $c = new Conector();
            $conexion = $c->conexion();
            $c = new Conector();
            $conexion = $c->conexion();
            $consulta = "SELECT fecha_final, fecha_inicio FROM t_asignacion_tarea WHERE id_asignacion_tarea = '$id_asignacion'";
            $resultado = mysqli_query($conexion, $consulta);
            $result_fecha = mysqli_fetch_row($resultado);

            $fecha_final = $result_fecha[0];
            $fecha_inicio = $result_fecha[1];
            $fecha_finalV = strtotime($fecha_final);
            $fecha_inicioV = strtotime($fecha_inicio);

            if($fecha_actual < $fecha_inicio && $fecha_actual < $fecha_final){
                $estado_asignacion = 1;
                $update = "UPDATE t_asignacion_tarea SET estado_asignacion = '$estado_asignacion' WHERE id_asignacion_tarea = '$id_asignacion'";
                $resultado = mysqli_query($conexion, $update);
                return $resultado;
            }elseif($fecha_actual > $fecha_inicio && $fecha_actual < $fecha_final){
                $estado_asignacion = 2;
                $update = "UPDATE t_asignacion_tarea SET estado_asignacion = '$estado_asignacion' WHERE id_asignacion_tarea = '$id_asignacion'";
                $resultado = mysqli_query($conexion, $update);
                return $resultado;
            }elseif($fecha_actual > $fecha_inicio && $fecha_actual > $fecha_final){
                return 0;
            }
        }
        public function mostrar_datos_grafica($nombre_usuario){
            $c = new Conector();
            $conexion = $c->conexion();
            $consulta = "SELECT id_usuarios FROM t_usuarios WHERE usuario = '$nombre_usuario'";
            $result = mysqli_query($conexion, $consulta);
            $id_usuario = mysqli_fetch_row($result);

            $sql = "SELECT fecha_inicio,estado_asignacion FROM t_asignacion_tarea WHERE fk_usuarios = $id_usuario[0]";
            $resultado = mysqli_query($conexion,$sql);
            return $resultado;
        }
    }
?>