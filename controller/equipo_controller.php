
<?php
include_once '../model/conexion_class.php';
    $tipoEquipo = $_POST['equTipo'];
    $dependencia = $_POST['dep'];
    $nombre = $_POST['nomEquipo'];
    $precio = $_POST['preEquipo'];
    $numSerie = $_POST['numSerie'];
    
    $con = mysqli_connect('localhost', 'root', '', 'helpdesk');
    $sql = "insert into equipos values('$numSerie', '$nombre', '$precio', '$dependencia', '$tipoEquipo')";
    echo $sql;
    $result = mysqli_query($con, $sql);
    if($result){
        header('Location: ../view/forms/frm_ingresar_ficha_tecnica.php?var=1');
    }
 else {
        echo mysqli_error($con);
}
    