<?php

include"../../HelpDesk/model/licencias_class.php";

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
        break;
    
    case("eliminar"):
        $controller->eliminar($_REQUEST['txtCodigo_Licencia'], $_REQUEST['txtNombre_Licencia'], $_REQUEST['Fecha_Inicio'], $_REQUEST['Fecha_Caducidad'], $_REQUEST['Fecha_Compra'], $_REQUEST['txtPrecio'], $_REQUEST['txtCobertura']);

        echo "se esta eliminado";

        break;
}

class licencias_controller {

    public function consultar($txtCodigo_Licencia) {

        $clase = new licencias_class();
        $clase->consultar($txtCodigo_Licencia);
    }

    public function actualizar($txtCodigo_Licencia, $txtNombre_Licencia, $txtFecha_Inicio, $txtFecha_caducidad, $txtFecha_Compra, $txtPrecio, $txtCobertura) {

        $clase = new licencias_class();
        $clase->actualizar($txtCodigo_Licencia, $txtNombre_Licencia, $txtFecha_Inicio, $txtFecha_caducidad, $txtFecha_Compra, $txtPrecio, $txtCobertura);
    }

    public function crear($txtCodigo_Licencia, $txtNombre_Licencia, $txtFecha_Inicio, $txtFecha_caducidad, $txtFecha_Compra, $txtPrecio, $txtCobertura) {

        $clase = new licencias_class();
        $clase->crear($txtCodigo_Licencia, $txtNombre_Licencia, $txtFecha_Inicio, $txtFecha_caducidad, $txtFecha_Compra, $txtPrecio, $txtCobertura);
    }

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
