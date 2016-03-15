<?php

include "../../HelpDesk-desarrollo/model/HistorialCambios_class.php";


$proceso = $_REQUEST ['petition'];

$historial = new HistorialCambios_controller();

switch ($proceso) {
    case ("guardar"): {
            $historial->guardar($_REQUEST['txtCodigo'],$_REQUEST['fecha'],$_REQUEST['hora'],$_REQUEST['txtdescripcion']);
           echo  "<script type=\"text/javascript\"> alert(\"Dato Guardado Correctamente\");</script>"; 
           
        }
        break;
    case("consultar"): {
        
            $historial->consultar($_REQUEST['pk-codigo']);
        }
        break;
    case ("eliminar"): {
        
            $historial->eliminar($_REQUEST['pk-codigo']);
            echo 'eliminado';
        }
        break;
    case ("modificar"): {
            
            $historial->modificar($_REQUEST['txtCodigo'],$_REQUEST['fecha'],$_REQUEST['hora'],$_REQUEST['txtdescripcion']);
            echo "modificado";
        }
        break;
    case ("consultar_todo"):{
        
            $historial->consultar_todo();
    }
    break;
}

class HistorialCambios_controller {
    //metodo encargado de guardar los datos de la tabla historial_cambio
    public function guardar($htc_codigo,$htc_fecha,$htc_hora,$htc_descripcion)
   
    {
        $test = new HistorialCambios_class();        
        $test->guardar($htc_codigo,$htc_fecha,$htc_hora,$htc_descripcion);
    }
    //metodo encargado realizar la consulta en la tabla garantias
    public  function consultar($gar_id)
    {
        $consul = new his();
        $resp = $consul->consultar($his_codigo);
        echo json_encode($resp);
        //include "../../HelpDesk/view/forms/frm_consulta_garantias.php";
        //muestra el resultado que me regresa garantias_class de la consulta
        
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
                
            
        }
    
    
       //metodo encargado de eliminar el campo seleccionado en la base de datos
    public function eliminar ($his_codigo)
    {
        $elimi = new HistorialCambios_class();
        $elimi->eliminar($his_codigo);
    }
    
    // metodo encargado de modificar algun campo de la bd tabla garantias
    public function modificar($his_codigo,$his_fecha,$his_hora,$htc_descripcion)
    {
        $modifi = new HistorialCambios_class();
        $modifi->modificar($his_codigo,$his_fecha,$his_hora,$htc_descripcion);
    }
    public  function consultar_todo()
    {
        $consul = new HistorialCambios_class();
        $consTodo = $consul->consultar_todo1();
               
   }
}