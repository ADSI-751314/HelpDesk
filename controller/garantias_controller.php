<?php

include "../../HelpDesk/model/garantias_class.php";

$proceso = $_REQUEST ['petition'];

$garantias = new garantias_controller();


switch ($proceso) {
    case ("guardar"): {
            $garantias->guardar($_REQUEST['txtGarantiaID'],$_REQUEST['txtTipo'],$_REQUEST['fecha'],$_REQUEST['fecha2'],$_REQUEST['txtDescripcion'],$_REQUEST['txtForanea']);
            echo 'guardado con éxito';
        }
        break;
    case("consultar"): {
        
            $garantias->consultar($gar_id, $gar_hardware, $gar_software, $gar_fecha1, $gar_fecha2, $gar_descripcion);
            echo'consultar';
        }
        break;
    case ("eliminar"): {
        
            $garantias->eliminar();
            echo 'eliminado';
        }
        break;
    case ("modificar"): {
            echo "modificado";
        }
        break;
}

class garantias_controller {
    
    public function guardar($gar_id,$gar_tipo,$gar_fecha,$gar_fecha2,$gar_descripcion,$gar_foranea)
   
    {
        $test = new garantias_class();        
        $test->guardar($gar_id,$gar_tipo,$gar_fecha,$gar_fecha2,$gar_descripcion,$gar_foranea);
    }
    public  function consultar($gar_id,$gar_hardware,$gar_software,$gar_fecha1,$gar_fecha2,$gar_descripcion)
    {
        
    }
    public function eliminar ($gar_id)
    {
        $elimi = new garantias_class();
        $elimi->eliminar($gar_codigo);
    }
    public function modificar($gar_id,$gar_hardware,$gar_software,$gar_fecha1,$gar_fecha2,$gar_descripcion)
    {
        $modifi = new garantias_class();
        $modifi->modificar($gar_id,$gar_hardware,$gar_software,$gar_fecha1,$gar_fecha2,$gar_descripcion);
    }
}
