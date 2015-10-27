<?php

include '../model/conexion_class.php';
$guar = $_REQUEST['var'];
switch ($guar) {
    case 'guar':

guardar();
        break;

    default:
        break;
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of equipo_controller
 *
 * @author Sena
 */
class equipo_controller {

//put your code here

    public static function guardar() {
        $tipoEquipo = $_POST["equTipo"];
        $dependencia = $_POST["dep"];
        $nombre = $_POST["nomEquipo"];
        $precio = $_POST["preEquipo"];
        $nomObjeto = $_POST["numSerie"];

        $sql = "INSERT INTO 'equipos'('equ_nombre', 'equ_precio', 'equ_numero_serie', 'fk_dep_codigo', 'fk_tip_codigo') VALUES ('" . nombre . "'," . precio . "," . numSerie . "," . depen . ", " . tipoEquipo . ")";
        $con = new conexion_class();
        $con->ejecutarQuery($sql);
        header("Location: ../view/forms/frm_ingresar_ficha_tecnica");
    }

}

?>
