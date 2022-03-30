<?php
    session_start();
    require_once "../../app/conector.php";
    require_once "../../class/Asignaciones.php";

    $nombre_usuario = $_SESSION['usuario'];

    $nombre_asignacion = $_POST['nombre_asignacion'];
    $comentantario_asignacion = $_POST['comentario_asignacion'];
    $nombre_materia = $_POST['nombre_materia'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_final = $_POST['fecha_final'];

    $fecha_actual = strtotime(date("y-m-d"));
    $fecha_inicioV = strtotime($fecha_inicio);
    $fecha_finalV = strtotime($fecha_final);

    if($fecha_actual < $fecha_inicio && $fecha_actual < $fecha_final){
        $estado_asignacion = 1;
    }elseif($fecha_actual > $fecha_inicio && $fecha_actual < $fecha_final){
        $estado_asignacion = 2;
    }elseif($fecha_actual > $fecha_inicio && $fecha_actual > $fecha_final){
        $estado_asignacion = 3;
    }


    $datos = array ($nombre_asignacion, $estado_asignacion , $nombre_materia, $comentantario_asignacion, $fecha_inicio, $fecha_final);

    $asig = new Asignaciones();
    $resultado = $asig->insertar_asignacion($datos, $nombre_usuario);

    if($resultado == 1){
        header("location:../../panel/asignacion_tareas.php");
    }else{
        echo $respuesta;
    }
?>