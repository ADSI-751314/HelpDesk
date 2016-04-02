<?php

require '../model/conexion_class.php';
switch ($_GET['op']) {
    case 1:
    agregarTipo();
    break;
    case 2:
    mostrarTipo();
    break;
    case 3:
    cargarOpsEquipo();
    break;
    case 4:
    agregarEquipo();
    break;
    case 5:
    mostrarEquipo();
    break;

    default:
    break;
}

function agregarTipo() {
    $conexion = new conexion_class();
    $conexion->conexion();
    $tipo = $_POST["tipo"];
    $sql = "insert into tipos_equipos values('', '$tipo')";
    $insert = $conexion->ejecutarQuery($sql);
    if ($insert == '1') {
        echo '<div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡Bien!</strong> Dato Insertado Correctamente.
        </div>';
    } else {
        echo '<div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡UPS!</strong> Ha ocurrido un error.
        </div>';
    }
}

function mostrarTipo() {
    $conexion = new conexion_class();
    $conexion->conexion();
    $sql = "select * from tipos_equipos";
    if (!$result = $conexion->ejecutarQuery($sql)) {
        echo $conexion->error;
    } else {
        $i = 1;
        echo '<table class="table table-hover table-resposive">';
        echo '<tr><th>#</th><th>Equipo</th><th>Opciones</th></tr>';
        while ($row = mysqli_fetch_array($result)) {
            echo '<tr>
            <th>' . $i . '</th>
            <td>' . $row[1] . '</td>
            <td><a href="">Modificar</a><br><a href="">Eliminar</a></td>
            </tr>';
            $i++;
        }
        echo '</table>';
    }
}

function cargarOpsEquipo() {
    $conexion = new conexion_class();
    $conexion->conexion();
    $sql = "select * from dependencias";
    if (!$result = $conexion->ejecutarQuery($sql)) {
        echo $conexion->error;
    } else {
        echo '<div class="form-group">';
        echo '<label class="col-lg-2 control-label" for="dep">Dependencia</label>';
        echo '<div class="col-lg-4">';
        echo '<select class="form-control" id="dep">';
        while ($row = mysqli_fetch_array($result)) {
            echo '<option value="'.$row[0].'">'.$row[1].'</option>';
        }
        echo '</div></select></div>';
    }
    $sql = "select * from tipos_equipos";
    if (!$result = $conexion->ejecutarQuery($sql)) {
        echo $conexion->error;
    } else {
        echo '<div class="form-group">';
        echo '<label class="col-lg-2 control-label" for="dep">Tipo Equipo</label>';
        echo '<div class="col-lg-4">';
        echo '<select class="form-control" id="tipo">';
        while ($row = mysqli_fetch_array($result)) {
            echo '<option value="'.$row[0].'">'.$row[1].'</option>';
        }
        echo '</div></select></div>';
    }
}
function agregarEquipo(){
    $conexion = new conexion_class();
    $conexion->conexion();
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $precio = preg_replace('/[^0-9]+/', '', $precio);
    $dep = $_POST["dep"];
    $tipo = $_POST["tipo"];
    $sql = "insert into equipos values('', '$nombre', '$precio','$dep','$tipo')";
    $insert = $conexion->ejecutarQuery($sql);
    if ($insert == '1') {
        echo '<div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡Bien!</strong> Dato Insertado Correctamente.
        </div>';
    } else {
        echo '<div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡UPS!</strong> Ha ocurrido un error.
        </div>';
    }
}
function mostrarEquipo(){
     $conexion = new conexion_class();
    $conexion->conexion();
    $sql = "select equ_nombre, equ_precio, dep_nombre,  tip_nombre from equipos e inner join dependencias d on e.fk_dep_codigo = d.pk_dep_codigo
    inner join tipos_equipos t on e.fk_tip_codigo = t.pk_tip_codigo";
    if (!$result = $conexion->ejecutarQuery($sql)) {
        echo $conexion->error;
    } else {
        $i = 1;
        echo '<table class="table table-hover table-resposive">';
        echo '<tr><th>#</th><th>Nombre</th><th>Precio</th><th>Dependencia</th><th>Tipo de Equipo</th><th>Opciones</th></tr>';
        while ($row = mysqli_fetch_array($result)) {
            $row[1] = number_format($row[1], 0, ",", ".");
            echo '<tr>
            <th>' . $i . '</th>
            <td>' . $row[0] . '</td>
            <td>' . $row[1] . '</td>
            <td>' . $row[2] . '</td>
            <td>' . $row[3] . '</td>
            <td><a href="">Modificar</a><br><a href="">Eliminar</a></td>
            </tr>';
            $i++;
        }
        echo '</table>';
    }
}