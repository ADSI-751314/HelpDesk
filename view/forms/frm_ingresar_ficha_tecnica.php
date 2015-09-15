<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

-->

<?php
$server = 'localhost'; //servidor
$username = 'root'; //usuario de la base de datos
$password = ''; //password del usuario de la base de datos
$database = 'HelpDesk'; //nombre de la base de datos

$conexion = @new mysqli($server, $username, $password, $database);

if ($conexion->connect_error) { //verificamos si hubo un error al conectar, recuerden que pusimos el @ para evitarlo
    die('Error de conexión: ' . $conexion->connect_error); //si hay un error termina la aplicación y mostramos el error
}

$sql = "select * from tipos_equipos";
$result = $conexion->query($sql); //usamos la conexion para dar un resultado a la variable

if ($result->num_rows > 0) { //si la variable tiene al menos 1 fila entonces seguimos con el codigo
    $combobit = "";
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $combobit .=" <option value='" . $row['pk_tip_codigo'] . "'>" . $row['tip_nombre'] . "</option>"; //concatenamos el los options para luego ser insertado en el HTML
    }
} else {
    echo "No hubo resultados";
}
$conexion->close(); //cerramos la conexión
?>
<html>
    <head>
        <title>Ingresar Ficha Técnica</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script>
            $(document).ready(function () {
                $('input#input_text, textarea#textarea1').characterCounter();
            });
        </script>
        <script>
            $(document).ready(function () {
                $('select').material_select();
            });
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form>

                    <div class="input-field col s12">
                        <b>Tipo de Equipo</b>
                        <select name="equTipo">
                            <option value="" disabled selected>Elegir una opción</option>
                            <?php echo $combobit; ?>
                        </select>        
                    </div>
                    <div class="input-field col s12">
                        <b>Nombre del equipo</b>
                        <input placeholder="ABCDE" id="nomEquipo" type="text" class="validate">
                    </div>
                    <div class="input-field col s12">
                        <b>Precio</b>
                        <input placeholder="12345" id="preEquipo" type="number" class="validate">
                    </div>
                    <div class="input-field col s12">
                        <b>Número de serie</b>
                        <input placeholder="102030" id="numSerie" type="text" class="validate">
                    </div>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action">Añadir
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>

</body>
</html>