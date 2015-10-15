<?php


include '../../HelpDesk/model/baseconocimiento_class.php';

$proceso = $_REQUEST['petition'];

$controller = new base_conocimiento_controller();

switch ($proceso){
    
    case("consulta"):
        $controller->consultar($_REQUEST['buscar_palabra'],$REQUEST['busqueda_espeficica'],$REQUEST['descripion_falla'],$REQUEST['Solucion_falla']);
        
        echo "se esta realizando la consulta";
      
        break;
    
}
class base_conocimiento_controller{
    
    public function consultar($buscar,$busqueda,$descripcion,$solucion){
        
        $clase = new base_conocimiento_class();
        $clase->consultar();     
    }
    
}