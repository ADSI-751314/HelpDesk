<?php


include '../../HelpDesk/model/provedores_class.php';


 
$provedores = new provedores_class();


$proceso = $_REQUEST ['petition'];
 
 switch($proceso)
 {
     
     case('guardar');
     {
       
         
        $pro_codigo=$_POST['txtPro_codigo'];
        $pro_nombre=$_POST['txtPro_nombre'];
        $pro_telefono=$_POST['txtPro_telefono'];
        $pro_direccion=$_POST['txtPro_direccion'];
        $pro_correo=$_POST['txtPro_correo'];
        $pro_pagina_web=$_POST['txtpagina_web'];
       
        $provedores->guardar($pro_codigo,$pro_nombre, $pro_telefono,$pro_direccion,$pro_correo,$pro_pagina_web);
                 
         
                 
     } 
  break;
     case('modificar');
     {
      
        $pro_codigo=$_POST['txtPro_codigo'];
        $pro_nombre=$_POST['txtPro_nombre'];
        $pro_telefono=$_POST['txtPro_telefono'];
        $pro_direccion=$_POST['txtPro_direccion'];
        $pro_correo=$_POST['txtPro_correo'];
        $pro_pagina_web=$_POST['txtpagina_web'];
       
     $provedores->modificar($pro_codigo,$pro_nombre, $pro_telefono,$pro_direccion,$pro_correo,$pro_pagina_web);
        
         
     }
     break;
     
     case('consultar');
     {
        
        $pro_codigo=$_POST['txtConsulta'];
         $provedores->consultar($pro_codigo);
        
     }
      break;
     case('eliminar');
     {
       $pro_codigo=$_POST['txtPro_codigo'];
       $provedores->eliminar($pro_codigo);
         
     }
    break;
 }


class provedores_controller {
    
      public function guardar($pro_codigo,$pro_nombre, $pro_telefono,$pro_direccion,$pro_correo,$pro_pagina_web)
    {
        $guar=new provedores_class();
        $guar->guardar($pro_codigo,$pro_nombre, $pro_telefono,$pro_direccion,$pro_correo,$pro_pagina_web);
    }
    
      public function modificar($pro_codigo,$pro_nombre, $pro_telefono,$pro_direccion,$pro_correo,$pro_pagina_web)
    {
        $modi=new provedores_class();
        $modi->modificar($pro_codigo,$pro_nombre, $pro_telefono,$pro_direccion,$pro_correo,$pro_pagina_web);
    }
       public function consultar($pro_codigo)
    {
        $cons=new provedores_class();
        $cons->consultar($pro_codigo);
    }
     public function eliminar($pro_codigo)
    {
        $cons=new provedores_class();
        $cons->eliminar($pro_codigo);
    }
}