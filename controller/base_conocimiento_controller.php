
<?php 

include '../../HelpDesk/model/baseconocimiento_class.php';

$proceso = $_REQUEST['petition'];

$controller = new base_conocimiento_controller();

switch ($proceso){
    
    case("consulta"):
        $controller->consultar($_REQUEST['txtPro_parametro']);
        
        echo "se esta realizando la consulta";
      
        break;
    
}


class base_conocimiento_controller{
    
    public function consultar($descripcion,$solucion){
        
        $clase = new base_conocimiento_class();
        $clase->consultar($descripcion,$solucion);     
    }
    
     public function consultar_todo() {
        $consul = new base_conocimiento_class();
        $contod = $consul->consultar_todo();
        foreach ($contod as $contenido) {
            echo $contenido;
        }
    }
}

   
