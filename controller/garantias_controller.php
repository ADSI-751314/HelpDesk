<?php

include "../model/garantias_class.php";

$proceso = $_REQUEST ['petition'];

$garantias = new garantias_controller();


switch ($proceso) {
    case ("guardar"): {
            $garantias->guardar($_REQUEST['txtGarantiaID'],$REQUEST['hardware'],$REQUEST['fecha'],$REQUEST['fecha2'],$REQUEST['txtDescripcion']);
        }
        break;
    case("consultar"): {
            echo'consultar';
        }
        break;
    case ("eliminar"): {
            echo 'eliminado';
        }
        break;
    case ("modificar"): {
            echo "modificado";
        }
        break;
}

class garantias_controller {
    
    public function guardar($gar_id,$gar_hardware,$)
    {
        $test = new garantias_class();        
        $test->almacenar($gar_id);
    }
}
