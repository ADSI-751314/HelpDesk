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
        
            $garantias->consultar($_REQUEST['txtGarantiaID']);
            echo "consulta exitosa";
        }
        break;
    case ("eliminar"): {
        
            $garantias->eliminar($_REQUEST['txtGarantiaID']);
            echo 'eliminado';
        }
        break;
    case ("modificar"): {
            
            $garantias->modificar($_REQUEST['txtGarantiaID'],$_REQUEST['txtTipo'],$_REQUEST['fecha'],$_REQUEST['fecha2'],$_REQUEST['txtDescripcion'],$_REQUEST['txtForanea']);
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
    public  function consultar($gar_id)
    {
        $consul = new garantias_class();
        $resp = $consul->consultar($gar_id);
        
        foreach($resp as $contenido)
        {
                   
         /*for($i=0; $i<count($resp); $i++)
        
            $contenido = "<tr> 
                     <td>".$resp['pk_gar_codigo']."</td>
                     <td>".$resp['gar_tipo']."</td>
                     <td>".$resp['gar_fecha_inicio']."</td>
                     <td>".$resp['gar_fecha_fin']."</td>
                     <td>".$resp['gar_descripcion']."</td>
                     <td>".$resp['fk_equ_codigo']."</td>
                    </tr>";*/
                    
            //echo "garantia codigo: $fk_equ_codigo; tipo garantia: $gar_tipo; fecha de inicio garantia: $gar_fecha_inicio; fecha fin de garantia: $gar_fecha_fin; descripcion de la garantia: $gar_tipo; codigo foraneo del equipo: $fk_equ_codigo";
                echo $contenido;
            
        }
    }
    

    public function eliminar ($gar_id)
    {
        $elimi = new garantias_class();
        $elimi->eliminar($gar_id);
    }
    public function modificar($gar_id,$gar_tipo,$gar_fecha,$gar_fecha2,$gar_descripcion,$gar_foranea)
    {
        $modifi = new garantias_class();
        $modifi->modificar($gar_id,$gar_tipo,$gar_fecha,$gar_fecha2,$gar_descripcion,$gar_foranea);
    }
}
