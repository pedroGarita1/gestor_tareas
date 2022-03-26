<?php
    require_once "../../app/conector.php";
    require_once "../../class/usuarios.php";

    $Usuarios = new Usuarios();
    $usuario = $_POST['username'];
    $password = sha1($_POST['password']);
    $nombre = $_POST['name'];
    $apellido_paterno = $_POST['firsname1'];
    $apellido_materno = $_POST['firsname2'];

    $datos = array ($usuario,$password,$nombre,$apellido_paterno,$apellido_materno);

    $respuesta = $Usuarios->registrar_usuario($datos);

    if($respuesta == 1){
        header("location:../../index.php");
    }else{
        echo $respuesta;
    }
?>