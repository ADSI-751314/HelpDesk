<?php

include "../model/garantias_class.php";

$proceso = $_REQUEST ['petition'];

$garantias = new garantias_controller();


switch ($proceso) {
    case ("guardar"): {
            $garantias->guardar($_REQUEST['txtGarantiaID'],$_REQUEST['rdoHardware'],$_REQUEST['rdoSfotware'],$_REQUEST['fecha1'],$_REQUEST['fecha2'],$_REQUEST['txtDescripcion']);
            echo 'guardado con éxito';
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
    
    public function guardar($gar_id,$gar_hardware,$gar_software,$gar_fecha1,$gar_fecha2,$gar_descripcion)
    public function guardar($gar_id,$gar_hardware)
    {
        $test = new garantias_class();        
        $test->almacenar($gar_id);
    }
}
