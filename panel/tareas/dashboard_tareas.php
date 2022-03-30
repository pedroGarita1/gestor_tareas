<?php
    $nombre_usuario = $_SESSION['usuario'];
    $Tareas = new Asignaciones();
    $datos = $Tareas->mostrar_asignacion($nombre_usuario);
?>
<div id="layoutSidenav">
    <?php require_once "menu.php";?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container mt-5">
                <div class="row justify-content-around">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center">TAREAS ASIGNADAS</h5>
                                <hr>
                                <p class="card-text">
                                    <?php require_once "tabla_asignacion.php"?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>