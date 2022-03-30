<?php
    session_start();
    require_once "../../app/conector.php";
    require_once "../../class/Asignaciones.php";

    $id_asignacion = $_GET['id_asignacion'];
    $estado_asignacion = 3;

    $asig = new Asignaciones();
    $resultado = $asig->Finalizar_asignacion($id_asignacion, $estado_asignacion);

    if($resultado == 1){
        header("location:../../panel/inicio.php");
    }else{
        echo $respuesta;
    }
?>