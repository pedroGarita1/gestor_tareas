<?php 
    session_start();
    if(isset($_SESSION['usuario'])){    
    require_once "../../app/librerias_tareas.php";
    require_once "../../app/conector.php";
    require_once "../../class/Tareas.php";
    $id_asignacion = $_GET['id_asignacion'];
    $Tareas = new Tareas();
    $sql = "SELECT nombre_asignacion, estado_asignacion, nombre_materia, requisitos_tarea, fecha_final FROM t_cat_asignacion_tarea WHERE id_asignacion_tarea = '$id_asignacion'";
    $ver = $Tareas->insertar_por_id($sql);
?>
<?php 
    require_once "nav.php";
?>
<div id="layoutSidenav">
    <?php require_once "menu.php";?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php 
    }else{
        header("location:../index.php");
    }
?>