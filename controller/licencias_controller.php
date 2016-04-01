<?php

include"../../HelpDesk/model/licencias_class.php";

$trabajo = $_REQUEST['petition'];

$controller = new licencias_controller();

switch ($trabajo) {

    case("crear"):{
        
        $controller->crear($_REQUEST['txtCodigo_Licencia'],$_REQUEST['txtNombre_Licencia'], $_REQUEST['Fecha_Inicio'], $_REQUEST['Fecha_Caducidad'], $_REQUEST['Fecha_Compra'], $_REQUEST['txtPrecio'], $_REQUEST['txtCobertura']);
        
    }
    break;
    
    case("consultar"):
    {
            echo 'NOSE SE VEEEEE';
        $controller->consultar($_REQUEST['txtCodigo_Licencia']);

        echo "se esta realizando la consulta";
    }
    break;

    case("actualizar"):{
        $controller->actualizar($_REQUEST['txtCodigo_Licencia'],$_REQUEST['txtNombre_Licencia'],$_REQUEST['Fecha_Inicio'],$_REQUEST['Fecha_Caducidad'], $_REQUEST['Fecha_Compra'], $_REQUEST['txtPrecio'], $_REQUEST['txtCobertura']);

        echo "se esta realizando la Actualizacion";
    }
    break;

    
    case("eliminar"):{
        $controller->eliminar($_REQUEST['txtCodigo_Licencia']);

        echo "se esta eliminado";
    }    
        break;
}

class licencias_controller {
 //metodo encargado de guardar los datos de la tabla licencias
   
    public function crear($txtCodigo_Licencia, $txtNombre_Licencia, $txtFecha_Inicio, $txtFecha_caducidad, $txtFecha_Compra, $txtPrecio, $txtCobertura)
    {
        $clase = new licencias_class();
        $clase->crear($txtCodigo_Licencia, $txtNombre_Licencia, $txtFecha_Inicio, $txtFecha_caducidad, $txtFecha_Compra, $txtPrecio, $txtCobertura);
    }
    
     //metodo encargado realizar la consulta en la tabla garantias
    
    public function consultar($lic_codigo)
    {
        echo "rerreeree";
        $clase = new licencias_class();
        $clase->consultar($txtCodigo_Licencia);
    }
    
// metodo encargado de modificar algun campo de la bd tabla licencias 
    
    public function actualizar($txtCodigo_Licencia, $txtNombre_Licencia, $txtFecha_Inicio, $txtFecha_caducidad, $txtFecha_Compra, $txtPrecio, $txtCobertura)
    {

        $clase = new licencias_class();
        $clase->actualizar($txtCodigo_Licencia, $txtNombre_Licencia, $txtFecha_Inicio, $txtFecha_caducidad, $txtFecha_Compra, $txtPrecio, $txtCobertura);
    }
    
     //metodo encargado de eliminar la licencia de la base de datos
    public function eliminar($pk_lic_codigo) {

        $clase = new licencias_class();
        $clase->eliminar($pk_lic_codigo);
        
    }

    public function consultar_todo() {
        $consul = new licencias_class();
        $contod = $consul->consultar_todo();
        foreach ($contod as $contenido) {
            echo $contenido;
        }
    }

}
