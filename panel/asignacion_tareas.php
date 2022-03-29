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
<body class="sb-nav-fixed">
<div id="layoutSidenav">
<?php 
    require_once "../view/inicio/nav_inicio.php"; 
    require_once "../view/inicio/menu.php";
?>
    <div id="layoutSidenav_content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Agregar Asignacion</h5>
                            <p class="card-text">
                                <form action="" method="post">
                                    <input type="text" class="form-control mb-3" name="nombre_asignacion">
                                    <input type="text" class="form-control mb-3" name="Comentario_asignacion">
                                    <input type="text" class="form-control mb-3" name="nombre_materia">
                                    <input type="date" class="form-control mb-3" name="dia_finalizacion">
                                </form>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>        
</body>
</html>
<?php 
    }else{
        header("location:../index.php");
    }
?>