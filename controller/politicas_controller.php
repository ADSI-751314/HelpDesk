<?php

include '../../HelpDesk/model/politicas_class.php';

$politicas = new politicas_class();


$proceso = $_REQUEST ['petition'];
 
switch($proceso)
 {
     
     case('guardar');
     {
       
        $pol_codigo=$_POST['txtCodigo'];
        $pol_descripcion=$_POST['txtDescripcion'];

        $politicas->guardar($pol_codigo,$pol_descripcion);
     } 

  break; 


case ('actualizar');
{
        $pol_codigo=$_POST['txtCodigo'];
        $pol_descripcion=$_POST['txtDescripcion'];  

        $politicas->modificar($pol_codigo,$pol_descripcion);
}
break;

     case('consultar');
     {
        $pol_codigo=$_POST['txtCodigo'];
        
         $politicas->consultar($pol_codigo);
     }

     break;

     case ('eliminar');
     {
        $pol_codigo=$_POST['txtCodigo'];
        $politicas->eliminar($pol_codigo);
     }

     break;
 }  

 class politicas_controller {
    
      public function guardar($pol_codigo,$pol_descripcion)
    {
        $guar=new politicas_class();
        $guar->guardar($pol_codigo,$pol_descripcion);
    }
    
      public function modificar($pol_codigo,$pol_descripcion)
    {
        $modi=new politicas_class();
        $modi->modificar($pol_codigo,$pol_descripcion);
    }
       public function consultar($pol_codigo)
    {
        $cons=new politicas_class();
        $cons->consultar($pol_codigo);
    }
     public function eliminar($pol_codigo)
    {
        $cons=new politicas_class();
        $cons->eliminar($pol_codigo);
    }
 }