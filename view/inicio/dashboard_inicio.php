<?php
    $nombre_usuario = $_SESSION['usuario'];
    $Tareas = new Asignaciones();
    $datos = $Tareas->mostrar_asignacion($nombre_usuario);
?>
<div id="layoutSidenav">
    <?php require_once "../view/inicio/menu.php";?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">
                    
                    <div id="graficas_asignaciones">
                    </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Registro tareas
                    </div>
                    <div class="card-body">
                        <?php require_once "../view/inicio/tabla_tareas.php";?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#graficas_asignaciones').load('tareas/graficas_asignacion.php');
    });
</script>