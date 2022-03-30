<?php 
    session_start();
    if(isset($_SESSION['usuario'])){
    require_once "../app/conector.php";
    require_once "../class/Asignaciones.php";
    $c = new Conector();
    $conexion = $c->conexion();
    $id_asignacion = $_GET['id_asignacion'];
    $consulta = "SELECT nombre_asignacion, requisitos_tarea, nombre_materia, fecha_inicio, fecha_final FROM t_asignacion_tarea WHERE id_asignacion_tarea = '$id_asignacion'";
    $resultado = mysqli_query($conexion, $consulta);
    $ver = mysqli_fetch_row($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "../app/librerias_inicio.php";?>
    <title>Actualizar Asignacion</title>
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
                                <form action="../procesos/asignaciones/actualizar_asignacion.php" method="post">
                                    <input type="hidden" name="id_asignacion" value="<?= $id_asignacion?>">
                                    <label for=""><h6>Nombre de la Asignacion</h6></label>
                                    <input type="text" class="form-control mb-3" value="<?= $ver[0]?>" name="nombre_asignacion" placeholder="Nombre de la asignacion">
                                    <label for=""><h6>Requisitos de la asignacion</h6></label>
                                    <input type="text" class="form-control mb-3" value="<?= $ver[1]?>" name="comentario_asignacion" placeholder="Requisitos de la asignacion">
                                    <label for=""><h6>Nombre de la materia</h6></label>
                                    <input type="text" class="form-control mb-3" value="<?= $ver[2]?>" name="nombre_materia" placeholder="Nombre de la materia">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for=""><h6>Fecha de inicio</h6></label>
                                            <input type="date" class="form-control mb-3" value="<?= $ver[3]?>" name="fecha_inicio">
                                        </div>
                                        <div class="col-md-6">
                                            <label for=""><h6>Fecha Final</h6></label>
                                            <input type="date" class="form-control mb-3" value="<?= $ver[4]?>" name="fecha_final">
                                        </div>
                                        <div class="col-md-6 text-center mt-3"><a class="btn btn-danger" href="inicio.php">Regresar</a></div>
                                        <div class="col-md-6 text-center mt-3"><button class="btn btn-primary">Agregar</button></div>
                                    </div>
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