<?php 
    session_start();
    if(isset($_SESSION['usuario'])){
    require_once "../../app/conector.php";
    require_once "../../class/Tareas.php";
    
?>
<?php 
    require_once "../../app/librerias_tareas.php";
?>
<?php 
    require_once "nav.php";
    require_once "dashboard_tareas.php";
?>
<?php 
    }else{
        header("location:../index.php");
    }
?>