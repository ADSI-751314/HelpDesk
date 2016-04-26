<?php

include '../../HelpDesk/model/detalles_servicios_class.php';

$detalles_servicios = new detalles_servicios_class();


$proceso = $_REQUEST ['petition'];

switch($proceso)
{
    
    case('crear');
    {
      
       $det_codigo=$_POST['txtCodigo'];
$det_fecha=$_POST['txtFecha'];
       $det_descripcion=$_POST['txtDescripcion'];

       $detalles_servicios->guardar($det_codigo,$det_fecha,$det_descripcion);
    } 

 break; 

case ('actualizar');
{
       $det_codigo=$_POST['txtCodigo'];
$det_fecha=$_POST['txtFecha'];
       $det_descripcion=$_POST['txtDescripcion'];

       $detalles_servicios->modificar($det_codigo,$det_fecha,$det_descripcion);
}

break;

    case('consultar');
    {
       $det_codigo=$_POST['txtCodigo'];
       //$det_descripcion=$_POST['txtDescripcion'];
        
    }

    break;

    case ('eliminar');
    {
       $det_codigo=$_POST['txtCodigo'];
       $detalles_servicios->eliminar($det_codigo);
    }

    break;
}  

class detalles_servicios_controller 
{
   
     public function guardar($det_codigo,$det_fecha,$det_descripcion)
   {
       $guar=new detalles_servicios_class();
       $guar->guardar($det_codigo,$det_fecha,$det_descripcion);
   }
   
     public function modificar($det_codigo,$det_fecha,$det_descripcion)
   {
       $modi=new detalles_servicios_class();
       $modi->modificar($det_codigo,$det_fecha,$det_descripcion);
   }
      public function consultar($det_codigo)
   {
       $cons=new detalles_servicios_class();
       $cons->consultar($det_codigo);
   }
    public function eliminar($det_codigo)
   {
       $cons=new detalles_servicios_class();
       $cons->eliminar($det_codigo);
   }
}

