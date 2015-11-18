<?php


include '../../HelpDesk/model/licencias_class.php';

include 'model/conexion_class.php';

$trabajo = $_REQUEST['petition'];

$controller = new licencias_controller();

switch ($trabajo) {

    case("consulta"):
        $controller->consultar($_REQUEST['txtCodigo_Licencia'], $_REQUEST['txtNombre_Licencia'], $_REQUEST['Fecha_Inicio'], $_REQUEST['Fecha_Caducidad'], $_REQUEST['Fecha_Compra'], $_REQUEST['txtPrecio'], $_REQUEST['txtCobertura']);

        echo "se esta realizando la consulta";

        break;

    case("actualizar"):
        $controller->actualizar($_REQUEST['txtCodigo_Licencia'], $_REQUEST['txtNombre_Licencia'], $_REQUEST['Fecha_Inicio'], $_REQUEST['Fecha_Caducidad'], $_REQUEST['Fecha_Compra'], $_REQUEST['txtPrecio'], $_REQUEST['txtCobertura']);

        echo "se esta realizando la Actualizacion";

        break;

    case("crear"):
        $controller->crear($_REQUEST['txtCodigo_Licencia'], $_REQUEST['txtNombre_Licencia'], $_REQUEST['Fecha_Inicio'], $_REQUEST['Fecha_Caducidad'], $_REQUEST['Fecha_Compra'], $_REQUEST['txtPrecio'], $_REQUEST['txtCobertura']);

        echo "se esta guardando el formulario";

        break;
    case("eliminar"):
        $controller->eliminar($_REQUEST['txtCodigo_Licencia'], $_REQUEST['txtNombre_Licencia'], $_REQUEST['Fecha_Inicio'], $_REQUEST['Fecha_Caducidad'], $_REQUEST['Fecha_Compra'], $_REQUEST['txtPrecio'], $_REQUEST['txtCobertura']);

        echo "se esta eliminado";

        break;
}

class licencias_controller {

    public function consultar($txtCodigo_Licencia, $txtNombre_Licencia, $txtFecha_Inicio, $txtFecha_caducidad, $txtFecha_Compra, $txtPrecio, $txtCobertura) {

        $clase = new licencias_class();
        
        $clase->consultar($txtCodigo_Licencia, $txtNombre_Licencia, $txtFecha_Inicio, $txtFecha_caducidad, $txtFecha_Compra, $txtPrecio, $txtCobertura);
        
        include "../../HelpDesk/view/forms/frm_licencias_consultar.php";
    }

    public function actualizar($txtCodigo_Licencia, $txtNombre_Licencia, $txtFecha_Inicio, $txtFecha_caducidad, $txtFecha_Compra, $txtPrecio, $txtCobertura) {

        $clase = new licencias_class();
        $clase->actualizar($txtCodigo_Licencia, $txtNombre_Licencia, $txtFecha_Inicio, $txtFecha_caducidad, $txtFecha_Compra, $txtPrecio, $txtCobertura);
    
         include "../../HelpDesk/view/forms/frm_licencias_actualizar.php";
    }

    public function crear($txtCodigo_Licencia, $txtNombre_Licencia, $txtFecha_Inicio, $txtFecha_caducidad, $txtFecha_Compra, $txtPrecio, $txtCobertura) {

        $clase = new licencias_class();
        $clase->crear($txtCodigo_Licencia, $txtNombre_Licencia, $txtFecha_Inicio, $txtFecha_caducidad, $txtFecha_Compra, $txtPrecio, $txtCobertura);
         
        include "../../HelpDesk/view/forms/frm_licencias_crear.php";
    }

    public function eliminar($pk_lic_codigo) {

        $clase = new licencias_class();
        $clase->eliminar($pk_lic_codigo);
        
         include "../../HelpDesk/view/forms/frm_licencias_eliminar.php";
    }

}
