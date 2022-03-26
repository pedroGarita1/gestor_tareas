<?php
    session_start();
    require_once "../../app/conector.php";
    require_once "../../class/usuarios.php";
    $usuarios = new Usuarios();
    $usuario = $_POST['username'];
    $password = sha1($_POST['password']);

    $respuesta = $usuarios->logear($usuario,$password);

    if($respuesta){
        header("location:../../panel/inicio.php");
    }else{
        echo $respuesta;
    }
?>