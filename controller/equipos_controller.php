
<?php
include "../../HelpDesk/model/equipos_class.php";


$proceso = $_REQUEST ['petition'];

$equipos = new equipos_controller();


switch ($proceso) {
    case ("insertar"): {
            $equipos->insertar($_REQUEST['txtcodigo'],$_REQUEST['txtnombre'],$_REQUEST['txtprecio'],$_REQUEST['Tipo_Dependencia'],$_REQUEST['Tipo_Equipo']);
           echo "Datos almacenados con éxito";
        }
        break;
    case("mostrar"): {
        
            $equipos->mostrar($_REQUEST['txtcodigo']);
            echo "éxito en la consulta";
        }
        break;
    case ("eliminar"): {
        
/* @var $_REQUEST type */
            $equipos->eliminar($_REQUEST['txtcodigo']);
            echo 'eliminado';
        }
        break;
    case ("modificar"): {
            
            $equipos->modificar($_REQUEST['txtcodigo'],$_REQUEST['txtprecio'],$_REQUEST['option'],$_REQUEST['optionl']);
            echo "modificado";
        }
        break;
   
}
class equipos_controller {
    //metodo encargado de guardar los datos de la tabla garantias
    public function insertar($equ_cod,$equ_nom,$equ_precio,$equ_option,$equ_optionl)
   
    {
        $test = new equipos_class();        
        $test->insertar($equ_cod,$equ_nom,$equ_precio,$equ_option,$equ_optionl);
    }
   
    
    
       //metodo encargado de eliminar el campo seleccionado en la base de datos
    public function eliminar ($equ_cod)
    {
        $elimi = new equipos_class();
        $elimi->eliminar($equ_cod);
    }
    
    // metodo encargado de modificar algun campo de la bd tabla garantias
    public function modificar($equ_cod,$equ_precio,$equ_option,$equ_optionl)
    {
        $modifi = new equipos_class();
        $modifi->modificar($equ_cod,$equ_precio,$equ_option,$equ_optionl);
    }
    
    
}