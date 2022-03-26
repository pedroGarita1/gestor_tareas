<?php
    $Tareas = new Tareas();
    $sql = "SELECT id_asignacion_tarea,nombre_asignacion, estado_asignacion, nombre_materia, requisitos_tarea, fecha_final FROM t_cat_asignacion_tarea";
    $datos = $Tareas->mostrar_asignacion_tareas($sql);
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
                                            if($ver['estado_asignacion'] == 1){
                                    ?>
                                        </li>
                                        <a href="entregar_tarea.php?id_asignacion=<?= $ver['id_asignacion_tarea']?>" class="list-group-item list-group-item-action list-group-item-info" aria-current="true">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h2 class="mb-1"><?= $ver['nombre_asignacion'];?></h2>
                                                <small>Finaliza: <?= $ver['fecha_final'];?></small>
                                            </div>
                                            <p class="mb-1"><?= $ver['requisitos_tarea'];?></p>
                                            <div class="d-flex w-100 justify-content-between">
                                                <small class="mb-1"><strong><?= $ver['nombre_materia'];?></strong></small>
                                                <small>Asignado</small>
                                            </div>
                                        </a>
                                        <br>
                                    <?php 
                                            }elseif($ver['estado_asignacion'] == 2){
                                    ?>
                                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger" aria-current="true">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h2 class="mb-1"><?= $ver['nombre_asignacion'];?></h2>
                                                <small>Finaliza: <?= $ver['fecha_final'];?></small>
                                            </div>
                                            <p class="mb-1"><?= $ver['requisitos_tarea'];?></p>
                                            <div class="d-flex w-100 justify-content-between">
                                                <small class="mb-1"><strong><?= $ver['nombre_materia'];?></strong></small>
                                                <small>Finalizado</small>
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