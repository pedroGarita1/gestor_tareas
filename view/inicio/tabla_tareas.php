<table id="datatablesSimple">
    <thead>
        <tr>
            <th>Nombre Asignacion</th>
            <th>Fecha Inicio</th>
            <th>Fecha Final</th>
            <th>Estado Tarea</th>
            <th>Editar</th>
            <th>Finalizar</th>
            <th>Volver a asignar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach($datos as $ver){
    ?>
        <tr>
            <td><?= $ver['nombre_asignacion']?></td>
            <td><?= $ver['fecha_inicio']?></td>
            <td><?= $ver['fecha_final']?></td>
        <?php
            if($ver['estado_asignacion'] == 1){
        ?>
            <td class="table-info text-center"><span>Por Asignar</span></td>
            <td class="text-center">
                <a class="btn btn-primary" href="editar_asignacion.php?id_asignacion=<?= $ver['id_asignacion_tarea']?>">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
            </td>
            <td class="text-center">
                <a class="btn btn-danger" href="../procesos/asignaciones/finalizar_asignacion.php?id_asignacion=<?= $ver['id_asignacion_tarea']?>">
                    <i class="fa-solid fa-delete-left"></i>
                </a>
            </td>
            <td class="table-info text-center"><span>Por asignar</span></td>
        <?php
            }elseif($ver['estado_asignacion'] == 2){
        ?>
            <td class="table-success text-center"><span >Asignado</span></td>
            <td class="text-center">
                <a class="btn btn-primary" href="editar_asignacion.php?id_asignacion=<?= $ver['id_asignacion_tarea']?>">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
            </td>
            <td class="text-center">
                <a class="btn btn-danger" href="../procesos/asignaciones/finalizar_asignacion.php?id_asignacion=<?= $ver['id_asignacion_tarea']?>">
                    <i class="fa-solid fa-delete-left"></i>
                </a>
            </td>
            <td class="table-success text-center"><span>Asignado</span></td>
        <?php
            }elseif($ver['estado_asignacion'] == 3){
        ?>
            <td class="table-danger text-center"><span >Finalizado</span></td>
            <td class="table-danger text-center"><span >Sin editar</span></td>
            <td class="table-danger text-center"><span >Finalizado</span></td>
            <td class="text-center">
                <a class="btn btn-warning" href="../procesos/asignaciones/volver_asignar.php?id_asignacion=<?= $ver['id_asignacion_tarea']?>">
                    <i class="fa-solid fa-arrow-rotate-left"></i>
                </a>
            </td>
        <?php
            }
        ?>
            <td class="text-center">
                <a class="btn btn-danger" href="../procesos/asignaciones/eliminar_asignacion.php?id_asignacion=<?= $ver['id_asignacion_tarea']?>">
                    <i class="fa-solid fa-delete-left"></i>
                </a>
            </td>
        </tr>
    <?php
        }
    ?>
    </tbody>
</table>