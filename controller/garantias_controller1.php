<?php


include "../../HelpDesk/model/garantias_class1.php";



$garantias = new garantias_class1();


if (isset($_GET['op'])) {
    $op = $_GET['op'];
}

if ($op == 1) {
    $garantias->consultar();
}

else if ($op == 2) {
            $codigo = $_POST['codigo'];
            $tipo = $_POST['tipo'];
            $FechaInicio = $_POST['FechaInicio'];
            $FechaFin = $_POST['FechaFin'];
            $descripcion = $_POST['descripcion'];
            $tipoEquipo = $_POST['tipoEquipo'];

            $garantias->guardar($codigo, $tipo, $FechaInicio, $FechaFin, $descripcion, $tipoEquipo);

           
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
   
    
    $garantias->cargarAgregar();
    echo "";
}

?>