<?php
include "../helpdesk/model/provedores_class.php";

 $proceso= $_POST['btnguardar'];
 
 
 $provedores = new provedores_class();
 
 switch($proceso)
 {
     
     case('guardar');
     {
         
         
        $pro_codigo=$_POST['txtPro_codigo'];
        $pro_nombre=$_POST['txtPro_nombre'];
        $pro_telefono=$_POST['txtPro_telefono'];
        $pro_direccion=$_POST['txtPro_direccion'];
        $pro_correo=$_POST['txtPro_correo'];
        $pro_direccion=$_POST['txtpagina_web'];
       
      $peticion= $provedores->guardar($pro_codigo,$pro_nombre, $pro_telefono,$pro_direccion,$pro_correo,$pro_pagina_web);
                 
                 
                 
     } 
  
     case('modificar');
     {
        $pro_codigo=$_POST['txtPro_codigo'];
        $pro_nombre=$_POST['txtPro_nombre'];
        $pro_telefono=$_POST['txtPro_telefono'];
        $pro_direccion=$_POST['txtPro_direccion'];
        $pro_correo=$_POST['txtPro_correo'];
        $pro_direccion=$_POST['txtpagina_web'];
       
      $peticion= $provedores->modificar($pro_codigo,$pro_nombre, $pro_telefono,$pro_direccion,$pro_correo,$pro_pagina_web);
         
         
     }
     
     
     case('consultar');
     {
         
         
         
     }
     case('eliminar');
     {
         
          $peticion= $provedores->eliminar($pro_codigo);
         
     }
   
 }


class provedores_controller {
    //put your code here
}
