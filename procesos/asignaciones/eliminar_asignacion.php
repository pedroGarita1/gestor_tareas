<?php
    session_start();
    require_once "../../app/conector.php";
    require_once "../../class/Asignaciones.php";
    $nombre_usuario = $_SESSION['usuario'];

    $id_asignacion = $_GET['id_asignacion'];
    
    $asig = new Asignaciones();
    $resultado = $asig->eliminar_asignacion($id_asignacion, $nombre_usuario);

    if($resultado == 1){
        header("location:../../panel/inicio.php");
    }else{
        echo $respuesta;
    }
?>