<?php
    session_start();
    require_once "../../app/conector.php";
    require_once "../../class/Asignaciones.php";

    $id_asignacion = $_POST['id_asignacion'];
    $nombre_asignacion = $_POST['nombre_asignacion'];
    $comentantario_asignacion = $_POST['comentario_asignacion'];
    $nombre_materia = $_POST['nombre_materia'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_final = $_POST['fecha_final'];

    $fecha_actual = strtotime(date("y-m-d"));
    $fecha_inicioV = strtotime($fecha_inicio);
    $fecha_finalV = strtotime($fecha_final);

    if($fecha_inicioV >= $fecha_actual && $fecha_finalV > $fecha_actual){
        $estado_asignacion = 1;//por
    }elseif($fecha_inicioV <= $fecha_actual && $fecha_finalV > $fecha_actual){
        $estado_asignacion = 2;//asig
    }elseif($fecha_inicioV < $fecha_actual && $fecha_finalV <= $fecha_actual){
        $estado_asignacion = 3;//fin
    }


    $datos = array ($nombre_asignacion, $estado_asignacion , $nombre_materia, $comentantario_asignacion, $fecha_inicio, $fecha_final, $id_asignacion);

    $asig = new Asignaciones();
    $resultado = $asig->actualizar_asignacion($datos);

    if($resultado == 1){
        header("location:../../panel/inicio.php");
    }else{
        echo $respuesta;
    }
?>