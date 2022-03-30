<?php
    session_start();
    require_once "../../app/conector.php";
    require_once "../../class/Asignaciones.php";
    $id_asignacion = $_GET['id_asignacion'];

    $asig = new Asignaciones();
    $resultado = $asig->asignar_nuevamente($id_asignacion);

    if($resultado == 1){
        header("location:../../panel/inicio.php");
    }else{
        header("location:../../panel/inicio.php");
    }
?>