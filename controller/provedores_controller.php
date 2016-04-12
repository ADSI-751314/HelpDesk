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

            echo "registro guardado";
}



if ($op==3){
    
            $pro_codigo = $_POST['txtPro_codigo'];
            $pro_nombre = $_POST['txtPro_nombre'];
            $pro_telefono = $_POST['txtPro_telefono'];
            $pro_direccion = $_POST['txtPro_direccion'];
            $pro_correo = $_POST['txtPro_correo'];
            $pro_pagina_web = $_POST['txtpagina_web'];

            $provedores->modificar($pro_codigo, $pro_nombre, $pro_telefono, $pro_direccion, $pro_correo, $pro_pagina_web);

            echo "registro modificado";
}

if ($op==4)
{
     $pro_codigo = $_POST['txtPro_codigo'];
            $provedores->eliminar($pro_codigo);
            echo "registro eliminado";
}

if($op==5){
    $pro_parametro = $_POST['txtPro_parametro'];
    
    $provedores->consultarParametro($pro_parametro);
    echo "consulta exitosa";
}

if($op==6){
     $pro_codigo = $_POST['txtPro_parametro'];
    
    $provedores->cargarModificar($pro_codigo);
    echo "carga exitosa";
}

if($op==7){
   
    
    $provedores->cargarAgregar();
    echo "";
}
//class provedores_controller {
//
//    public function guardar($pro_codigo, $pro_nombre, $pro_telefono, $pro_direccion, $pro_correo, $pro_pagina_web) {
//        $guar = new provedores_class();
//        $guar->guardar($pro_codigo, $pro_nombre, $pro_telefono, $pro_direccion, $pro_correo, $pro_pagina_web);
//    }
//
//    public function modificar($pro_codigo, $pro_nombre, $pro_telefono, $pro_direccion, $pro_correo, $pro_pagina_web) {
//        $modi = new provedores_class();
//        $modi->modificar($pro_codigo, $pro_nombre, $pro_telefono, $pro_direccion, $pro_correo, $pro_pagina_web);
//    }
//
//    public function consultar() {
//        $cons = new provedores_class();
//        $cons->consultar($pro_codigo);
//    }
//
//    public function eliminar($pro_codigo) {
//        $cons = new provedores_class();
//        $cons->eliminar($pro_codigo);
//    }
//
//}
