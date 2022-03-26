<?php 
    session_start();
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
<body>
<div class="container-fluid color-fondo">
    <div class="row">
        <nav class="navbar bg-dark text-white navbar-light bg-light">
            <div class="container-fluid">
                <h5><?= $_SESSION['usuario'];?></h5>
                <form class="d-flex">
                    <a class="btn btn-danger" href="../procesos/usuarios/salir.php">SALIR</a>
                </form>
            </div>
        </nav>
    </div>
</div>
<br>
</body>
</html>
<?php 
    }else{
        header("location:../index.php");
    }
?>