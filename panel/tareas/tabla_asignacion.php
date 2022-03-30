<div class="list-group">
    <?php 
        foreach($datos as $ver){
            $fecha_inicio = strtotime($ver['fecha_inicio']);
            $fecha_final = strtotime($ver['fecha_final']);
            if($ver['estado_asignacion'] == 1){
                
    ?>
                <a href="../editar_asignacion.php?id_asignacion=<?= $ver['id_asignacion_tarea']?>" class="list-group-item list-group-item-action list-group-item-info mb-3" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h3 class="mb-1"><small><strong>Nombre Asignacion:</strong> </small><?= $ver['nombre_asignacion'];?></h3>
                        <small><strong>Finaliza:</strong> <?= $ver['fecha_final'];?></small>
                    </div>
                    <p class="mb-1"><small><strong>Requisitos:</strong> </small><?= $ver['requisitos_tarea'];?></p>
                    <div class="d-flex w-100 justify-content-between">
                        <small class="mb-1"><small><strong>Nombre Materia:</strong></small> <?= $ver['nombre_materia'];?></small>
                        <small>Por asignar</small>
                    </div>
                </a>
    <?php 
            }if($ver['estado_asignacion'] == 2){
    ?>
                <a href="../editar_asignacion.php?id_asignacion=<?= $ver['id_asignacion_tarea']?>" class="list-group-item list-group-item-action list-group-item-success mb-3" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h3 class="mb-1"><small><strong>Nombre Asignacion:</strong> </small><?= $ver['nombre_asignacion'];?></h3>
                        <small>Finaliza: <?= $ver['fecha_final'];?></small>
                    </div>
                    <p class="mb-1"><small><strong>Requisitos:</strong> </small><?= $ver['requisitos_tarea'];?></p>
                    <div class="d-flex w-100 justify-content-between">
                        <small class="mb-1"><small><strong>Nombre Materia:</strong></small> <?= $ver['nombre_materia'];?></small>
                        <small>Asignado</small>
                    </div>
                </a>
    <?php
            }if($ver['estado_asignacion'] == 3){
    ?>
                <a href="#" class="list-group-item list-group-item-action list-group-item-danger mb-3" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h3 class="mb-1"><small><strong>Nombre Asignacion:</strong> </small><?= $ver['nombre_asignacion'];?></h3>
                        <small>Finalizo: <?= $ver['fecha_final'];?></small>
                    </div>
                    <p class="mb-1"><small><strong>Requisitos:</strong> </small><?= $ver['requisitos_tarea'];?></p>
                    <div class="d-flex w-100 justify-content-between">
                        <small class="mb-1"><small><strong>Nombre Materia:</strong></small> <?= $ver['nombre_materia'];?></small>
                        <small>Finalizado</small>
                    </div>
                </a>
    <?php            
            }
        }
    ?>
</div>