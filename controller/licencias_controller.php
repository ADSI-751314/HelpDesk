<?php


include '../model/licencias_class.php';

$trabajo= $_REQUEST['petition'];

$controller = new licencias_controller();

switch ($trabajo){
    
    case("consulta"):
        $controller->consultar($_REQUEST['txtCodigo_Licencia'],$REQUEST['txtNombre_Licencia'],$REQUEST['txtFecha_Inicio'],$REQUEST['txtFecha_Vencimiento'],$REQUEST['txtFecha_Compra'],$REQUEST['txtPrecio'],$REQUEST['txtCobertura']);
        
        echo "se esta realizando la consulta";
      
        break;
    
    case("Actualizar"):
        $controller->actualizar($_REQUEST['txtCodigo_Licencia'],$REQUEST['txtNombre_Licencia'],$REQUEST['txtFecha_Inicio'],$REQUEST['txtFecha_Vencimiento'],$REQUEST['txtFecha_Compra'],$REQUEST['txtPrecio'],$REQUEST['txtCobertura']);
        
        echo "se esta realizando la Actualizacion";
      
        break;
    
    case("Crear"):
        $controller->crear($_REQUEST['txtCodigo_Licencia'],$REQUEST['txtNombre_Licencia'],$REQUEST['txtFecha_Inicio'],$REQUEST['txtFecha_Vencimiento'],$REQUEST['txtFecha_Compra'],$REQUEST['txtPrecio'],$REQUEST['txtCobertura']);
        
        echo "se esta creando el formulario";
      
        break;
    case("Eliminar"):
        $controller->eliminar($_REQUEST['txtCodigo_Licencia'],$REQUEST['txtNombre_Licencia'],$REQUEST['txtFecha_Inicio'],$REQUEST['txtFecha_Vencimiento'],$REQUEST['txtFecha_Compra'],$REQUEST['txtPrecio'],$REQUEST['txtCobertura']);
        
        echo "se esta eliminado";
      
        break;
}

class licencias_controller{
    
      public function consultar($txtCodigo_Licencia,$txtNombre_Licencia,$txtFecha_Inicio,$txtFecha_Vencimiento,$txtFecha_Compra,$txtPrecio,$txtCobertura){
       
       $clase = new licencias_class();
       $clase->consultar();
      
      }
    public function actualizar($pk_lic_codigo, $lic_nombre, $lic_fecha_compra, $lic_fecha_caducidad, $lic_precio, $lic_cobertura){
        
        $clase = new licencias_class();
        $clase->actualizar();
                
    }
    public function crear($pk_lic_codigo, $lic_nombre, $lic_fecha_compra, $lic_fecha_caducidad, $lic_precio, $lic_cobertura){
        
        $clase = new licencias_class();
        $clase->crear();
        
    }
    public function eliminar($pk_lic_codigo){
        
        $clase = new licencias_class();
        $clase->eliminar();
        
    }
}


    
    
