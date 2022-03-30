<?php 
    session_start();
    if(isset($_SESSION['usuario'])){
    require_once "../../app/conector.php";
    require_once "../../class/Asignaciones.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        require_once "../../app/librerias_tareas.php";
    ?>
    <title>Ver Tareas</title>
</head>
<body>
<?php 
    require_once "nav.php";
    require_once "dashboard_tareas.php";
?>
</body>
</html>
<?php 
    }else{
        header("location:../index.php");
    }
?>