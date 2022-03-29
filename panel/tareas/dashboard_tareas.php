<?php
    $nombre_usuario = $_SESSION['usuario'];
    $Tareas = new Tareas();

    $datos = $Tareas->mostrar_asignacion_tareas($nombre_usuario);
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
                                    <div class="list-group">
                                    <?php 
                                        foreach($datos as $ver){
                                            if($ver['estado_asignacion'] == 2 && $ver['estado_tarea'] == 0){
                                    ?>
                                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger" aria-current="true">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h2 class="mb-1"><?= $ver['nombre_asignacion'];?></h2>
                                                <small>Finaliza: <?= $ver['fecha_final'];?></small>
                                            </div>
                                            <p class="mb-1"><?= $ver['requisitos_tarea'];?></p>
                                            <div class="d-flex w-100 justify-content-between">
                                                <small class="mb-1"><strong><?= $ver['nombre_materia'];?></strong></small>
                                                <small><span class="btn btn-danger">Finalizado Sin entregar</span></small>
                                            </div>
                                        </a>
                                        <br>
                                    <?php
                                            }elseif($ver['estado_asignacion'] == 1 && $ver['estado_tarea'] == 1){
                                    ?>
                                        <a href="#" class="list-group-item list-group-item-action list-group-item-success" aria-current="true">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h2 class="mb-1"><?= $ver['nombre_asignacion'];?></h2>
                                                <small>Finaliza: <?= $ver['fecha_final'];?></small>
                                            </div>
                                            <p class="mb-1"><?= $ver['requisitos_tarea'];?></p>
                                            <div class="d-flex w-100 justify-content-between">
                                                <small class="mb-1"><strong><?= $ver['nombre_materia'];?></strong></small>
                                                <small><span class="btn btn-warning">Asignado Entregado</span></small>
                                            </div>
                                        </a>
                                        <br>
                                    <?php
                                            }elseif($ver['estado_asignacion'] == 2 && $ver['estado_tarea'] == 1){
                                    ?>
                                        <a href="#" class="list-group-item list-group-item-action list-group-item-success" aria-current="true">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h2 class="mb-1"><?= $ver['nombre_asignacion'];?></h2>
                                                <small>Finaliza: <?= $ver['fecha_final'];?></small>
                                            </div>
                                            <p class="mb-1"><?= $ver['requisitos_tarea'];?></p>
                                            <div class="d-flex w-100 justify-content-between">
                                                <small class="mb-1"><strong><?= $ver['nombre_materia'];?></strong></small>
                                                <small><span class="btn btn-danger">Finalizado Entregado</span></small>
                                            </div>
                                        </a>
                                        <br>
                                    <?php
                                            }elseif($ver['estado_asignacion'] == 1){
                                    ?>
                                        <a href="#" class="list-group-item list-group-item-action list-group-item-success" aria-current="true">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h2 class="mb-1"><?= $ver['nombre_asignacion'];?></h2>
                                                <small>Finaliza: <?= $ver['fecha_final'];?></small>
                                            </div>
                                            <p class="mb-1"><?= $ver['requisitos_tarea'];?></p>
                                            <div class="d-flex w-100 justify-content-between">
                                                <small class="mb-1"><strong><?= $ver['nombre_materia'];?></strong></small>
                                                <small><span class="btn btn-info">Asignado Sin entregar</span></small>
                                            </div>
                                        </a>
                                        <br>
                                    <?php
                                            }
                                        }
                                    ?>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>