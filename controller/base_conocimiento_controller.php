<?php

include '../../HelpDesk/model/provedores_class.php';



$provedores = new provedores_class();


if (isset($_GET['op'])) {
    $op = $_GET['op'];
}

if ($op == 1) {
    $provedores->consultar();
}

if ($op == 2) {
            $pro_codigo = $_POST['txtPro_codigo'];
            $pro_nombre = $_POST['txtPro_nombre'];
            $pro_telefono = $_POST['txtPro_telefono'];
            $pro_direccion = $_POST['txtPro_direccion'];
            $pro_correo = $_POST['txtPro_correo'];
            $pro_pagina_web = $_POST['txtpagina_web'];

            $provedores->guardar($pro_codigo, $pro_nombre, $pro_telefono, $pro_direccion, $pro_correo, $pro_pagina_web);

            echo "";
}



if ($op==3){
    
            $pro_codigo = $_POST['txtPro_codigo'];
            $pro_nombre = $_POST['txtPro_nombre'];
            $pro_telefono = $_POST['txtPro_telefono'];
            $pro_direccion = $_POST['txtPro_direccion'];
            $pro_correo = $_POST['txtPro_correo'];
            $pro_pagina_web = $_POST['txtpagina_web'];

            $provedores->modificar($pro_codigo, $pro_nombre, $pro_telefono, $pro_direccion, $pro_correo, $pro_pagina_web);

            echo "";
}

if ($op==4)
{
     $pro_codigo = $_POST['txtPro_codigo'];
            $provedores->eliminar($pro_codigo);
            echo "";
}

if($op==5){
    $pro_parametro = $_POST['txtPro_parametro'];
    
    $provedores->consultarParametro($pro_parametro);
    echo "";
}

if($op==6){
     $pro_codigo = $_POST['txtPro_parametro'];
    
    $provedores->cargarModificar($pro_codigo);
    echo "";
}

if($op==7){
   
    
    $provedores->cargarAgregar();
    echo "";
}


//<?php //
//
//
//include '../../HelpDesk/model/baseconocimiento_class.php';
//
//$proceso = $_REQUEST['petition'];
//
//$controller = new base_conocimiento_controller();
//
//switch ($proceso){
//    
//    case("consulta"):
//        $controller->consultar($_REQUEST['buscar_palabra'],$REQUEST['busqueda_especifica'],$REQUEST['descripion_falla'],$REQUEST['Solucion_falla']);
//        
//        echo "se esta realizando la consulta";
//      
//        break;
//    
//}
//class base_conocimiento_controller{
//    
//    public function consultar($buscar,$busqueda,$descripcion,$solucion){
//        
//        $clase = new base_conocimiento_class();
//        $clase->consultar('pk_det_codigo','det_descripcion','det_fecha');     
//    }
//    
//    public function consulta($buscar,$busqueda,$descripcion,$solucion){
//        
//        $clase = new base_conocimiento_class();
//        $clase->consulta('pk_htc_codigo','htc_fecha','htc_hora', 'htc_descripcion');     
//    }
//    
//}
//
