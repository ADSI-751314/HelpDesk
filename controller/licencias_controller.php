<?php


include '../../HelpDesk/model/conexion_class.php';

$trabajo= $_REQUEST['petition'];

$controller = new licencias_controller();

switch ($trabajo){
    
    case("consulta"):
        $controller->consultar($_REQUEST['txtCodigo_Licencia'],$_REQUEST['txtNombre_Licencia'],$_REQUEST['txtFecha_Inicio'],$_REQUEST['txtFecha_Vencimiento'],$_REQUEST['txtFecha_Compra'],$_REQUEST['txtPrecio'],$_REQUEST['txtCobertura']);
        
        echo "se esta realizando la consulta";
      
        break;
    
    case("actualizar"):
        $controller->actualizar($_REQUEST['txtCodigo_Licencia'],$_REQUEST['txtNombre_Licencia'],$_REQUEST['txtFecha_Inicio'],$_REQUEST['txtFecha_Vencimiento'],$_REQUEST['txtFecha_Compra'],$_REQUEST['txtPrecio'],$_REQUEST['txtCobertura']);
        
        echo "se esta realizando la Actualizacion";
      
        break;
    
    case("crear"):
        $controller->crear($_REQUEST['txtCodigo_Licencia'],$_REQUEST['txtNombre_Licencia'],$_REQUEST['txtFecha_Inicio'],$_REQUEST['txtFecha_Vencimiento'],$_REQUEST['txtFecha_Compra'],$_REQUEST['txtPrecio'],$_REQUEST['txtCobertura']);
        
        echo "se esta guardando el formulario";
      
        break;
    case("eliminar"):
        $controller->eliminar($_REQUEST['txtCodigo_Licencia'],$_REQUEST['txtNombre_Licencia'],$_REQUEST['txtFecha_Inicio'],$_REQUEST['txtFecha_Vencimiento'],$_REQUEST['txtFecha_Compra'],$_REQUEST['txtPrecio'],$_REQUEST['txtCobertura']);
        
        echo "se esta eliminado";
      
        break;
}

class licencias_controller{
    
      public function consultar($txtCodigo_Licencia,$txtNombre_Licencia,$txtFecha_Inicio,$txtFecha_caducidad,$txtFecha_Compra,$txtPrecio,$txtCobertura){
       
       $clase = new licencias_class();
       $clase->consultar();
      
      }
    public function actualizar($txtCodigo_Licencia,$txtNombre_Licencia,$txtFecha_Inicio,$txtFecha_caducidad,$txtFecha_Compra,$txtPrecio,$txtCobertura){
        
        $clase = new licencias_class();
        $clase->actualizar();
                
    }
    public function crear($txtCodigo_Licencia,$txtNombre_Licencia,$txtFecha_Inicio,$txtFecha_caducidad,$txtFecha_Compra,$txtPrecio,$txtCobertura){
        
        $clase = new licencias_class();
        $clase->crear();
        
    }
    public function eliminar($pk_lic_codigo){
        
        $clase = new licencias_class();
        $clase->eliminar();
        
    }
}


    
    
