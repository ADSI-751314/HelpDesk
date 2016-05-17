
<?php 

include '../../HelpDesk/model/baseconocimiento_class.php';

$proceso = $_REQUEST['petition'];

$controller = new base_conocimiento_controller();

switch ($proceso){
    
    case("consulta"):
        $controller->consultar($_REQUEST['txtPro_parametro'],$_REQUEST['descripion_falla'],$REQUEST['Solucion_falla']);
        
        echo "se esta realizando la consulta";
      
        break;
    
}
class base_conocimiento_controller{
    
    public function consultar($descripcion,$solucion){
        
        $clase = new base_conocimiento_class();
        $clase->consultar('pk_ser_ticket,equ_nombre,pte_descripcion,htc_descripcion,htc_fecha');     
    }
    
    
    
}

