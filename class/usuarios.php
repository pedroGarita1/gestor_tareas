<?php
    
    class Usuarios{
        public function logear ($usuario, $password){
            try {
                $C = new Conector();
                $conexion = $C->conexion();
                $sql = "SELECT * FROM t_usuarios WHERE usuario = '$usuario' AND password = '$password'";
                $respuesta = mysqli_query($conexion,$sql);
                $existe = mysqli_num_rows($respuesta);
                if($existe > 0){
                    $_SESSION['usuario'] = $usuario;
                    return true;
                }else{
                    return false;
                }
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function registrar_usuario($datos){
            $C = new Conector();
            $conexion = $C->conexion();
            $sql = "INSERT INTO t_usuarios (usuario,password,nombre,apellido_parerno,apellido_materno)
                    VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')";
            $respuesta = mysqli_query($conexion,$sql);
            return $respuesta;
        }
    }
?>