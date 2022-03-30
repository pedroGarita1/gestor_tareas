<?php
    session_start();
    require_once "../../app/conector.php";
    require_once "../../class/Asignaciones.php";
    $nombre_usuario = $_SESSION['usuario'];
    $Tareas = new Asignaciones();
    $resultado = $Tareas->mostrar_datos_grafica($nombre_usuario);
    $valorX = array();//fechas
    $valorY = array();//asignaciones_finalizadas
    while($ver = mysqli_fetch_row($resultado)){
        if($ver[1] == 1){
            $estado = "Por asignar";
        }elseif($ver[1] == 2){
            $estado = "Asignado";
        }elseif($ver[1] == 3){
            $estado = "Finalizado";
        }
        $valoresY[] = $ver[0];
        $valoresX[] = $estado;
    }
    $datosX = json_encode($valoresX);
    $datosY = json_encode($valoresY);
?>
<div class="col-xl-12">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-chart-area me-1"></i>
            Grafica Porsentaje de asignacion 
        </div>
        <div style="width: 95%; height: 400px;" class="card-body" id="grafica"></div>
    </div>
</div>
<script type="text/javascript">
    function crearCadenaLineal(json){
        var parsed = JSON.parse(json);
        var arr = [];
        for(var x in parsed){
            arr.push(parsed[x]);
        }
        return arr;
    }

    datosX = crearCadenaLineal('<?php echo $datosX?>');
    datosY = crearCadenaLineal('<?php echo $datosY?>');

    console.log(datosX);

    var data = [
    {
        x: datosY,
        y: datosX,
        type: 'bar'
    }
    ];

    Plotly.newPlot('grafica', data);
</script>