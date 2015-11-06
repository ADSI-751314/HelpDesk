<?php

// enlaza con la clase de reportes
include "../model/reportes_class.php";

// Recibe como una variable la peticion del formulario
$proceso = $_REQUEST ['petition'];


$controller = new reportes_controller();
// valida la peticion 
switch ($proceso) {

    case ("reporteUsuario"): {
            // hace el llamado al metodo reporteUsuario
            $controller->reporteUsuario($_REQUEST['FechaInicio'], $_REQUEST['FechaFin']);
        }break;
    case ("reporteFallas"): {
            
        }break;

    case ("reporteMarcas"): {
            
        }break;
    case("reportePartes"): {
            
        }break;
}

class reportes_controller {

    // Metodo reporteusuario
    public function reporteUsuario($FechaInicio, $FechaFin) {
        // enlaza con la clase 
        $consul = new reportes_class();
        $resp = $consul->consultarUsuarios($FechaInicio, $FechaFin);

        include "../view/forms/frm_resultados_reportes.php";
        // Muestra los resultados de la consulta
    }

}