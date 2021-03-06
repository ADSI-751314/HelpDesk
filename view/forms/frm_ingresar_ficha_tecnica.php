
<?php
$server = 'localhost'; //servidor
$username = 'root'; //usuario de la base de datos
$password = ''; //password del usuario de la base de datos
$database = 'helpdesk'; //nombre de la base de datos

$conexion = @new mysqli($server, $username, $password, $database);

if ($conexion->connect_error) { //verificamos si hubo un error al conectar, recuerden que pusimos el @ para evitarlo
    die('Error de conexión: ' . $conexion->connect_error); //si hay un error termina la aplicación y mostramos el error
}
$conexion->query("SET NAMES 'UTF8'");
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


$sql2 = "select pk_dep_codigo, dep_nombre from dependencias";
$result2 = $conexion->query($sql2); //usamos la conexion para dar un resultado a la variable

if ($result2->num_rows > 0) { //si la variable tiene al menos 1 fila entonces seguimos con el codigo
    $combobit2 = "";
    while ($row2 = $result2->fetch_array(MYSQLI_ASSOC)) {
        $combobit2 .=" <option value='" . $row2['pk_dep_codigo'] . "'>" . $row2['dep_nombre'] . "</option>"; //concatenamos el los options para luego ser insertado en el HTML
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
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script>
            $(document).ready(function () {
                $('input#input_text, textarea#textarea1').characterCounter();
            });

            $(document).ready(function () {
                $('select').material_select();
            });

            $(document).ready(function () {
                // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal-trigger').leanModal();
            });
            $('#textarea1').val('New Text');
            $('#textarea1').trigger('autoresize');


        </script>
    </head>
    <body>
        <?php
        if (isset($_GET['var'])) {
            $var = $_GET['var'];
            if ($var == 1) {
                echo '<script>alert("El equipo ha sido agregado correctamente");</script>';
            }
        }
        ?>
        <div class="container">
            <div class="row">
                <form method="POST" action="../../controller/equipo_controller.php">
                    <div class="input-field col s12">
                        <b>Tipo de Equipo</b>
                        <select name="equTipo">
                            <option value="" disabled selected>Elegir una opción</option>
                            <?php echo $combobit; ?>
                        </select>        
                    </div>
                    <div class="input-field col s12">
                        <b>Dependencia</b>
                        <select name="dep">
                            <option value="" disabled selected>Elegir una opción</option>
                            <?php echo $combobit2; ?>
                        </select>        
                    </div>
                    <div class="input-field col s12">
                        <b>Nombre del equipo</b>
                        <input placeholder="ABCDE" name="nomEquipo" type="text" class="validate">
                    </div>
                    <div class="input-field col s12">
                        <b>Precio</b>
                        <input placeholder="12345" name="preEquipo" type="text">
                    </div>
                    <div class="input-field col s12">
                        <b>Número de serie</b>
                        <input placeholder="102030" name="numSerie" type="text">
                    </div>


                    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
        </div>

    </body>
</html>



