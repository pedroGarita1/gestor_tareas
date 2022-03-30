<?php 
    session_start();
    require_once "../app/conector.php";
    require_once "../class/Asignaciones.php";
    if(isset($_SESSION['usuario'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "../app/librerias_inicio.php";?>
    <title>INICIO</title>
</head>
<body class="sb-nav-fixed">
        <?php 
            require_once "../view/inicio/nav_inicio.php";
            require_once "../view/inicio/dashboard_inicio.php";
        ?>
</body>
</html>
<?php 
    }else{
        header("location:../index.php");
    }
?>