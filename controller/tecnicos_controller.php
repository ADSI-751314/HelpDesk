<?php

include '../../HelpDesk/model/tecnicos_class.php';

$tecnicos = new tecnicos_class();


$proceso = $_REQUEST ['petition'];
 
switch($proceso)
 {
     
     case('guardar');
     {
       
        $tec_codigo=$_POST['txtCodigoTecnico'];
        $tec_pimer_nombre=$_POST['txtPrimerNombre'];
		$tec_segundo_nombre=$_POST['txtSegundoNombre'];
		$tec_primer_apellido=$_POST['txtPrimerApellido'];
		$tec_segundo_apellido=$_POST['txtSegundoApellido'];
		$tec_numero_telefono=$_POST['txtTelefono'];
		$tec_numero_movil=$_POST['txtNumeroMovil'];
		$tec_correo=$_POST['txtMovil'];
		$tec_especialidad=$POST['cboEspecialidad'];
		
        $tecnicos->guardar($tec_codigo,$tec_pimer_nombre,$tec_segundo_nombre,$tec_primer_apellido,$tec_segundo_apellido,$tec_numero_telefono,$tec_numero_movil,$tec_correo,$tec_especialidad);
     } 

  break; 


case ('actualizar');
{
		$tec_codigo=$_POST['txtCodigoTecnico'];
        $tec_pimer_nombre=$_POST['txtPrimerNombre'];
		$tec_segundo_nombre=$_POST['txtSegundoNombre'];
		$tec_primer_apellido=$_POST['txtPrimerApellido'];
		$tec_segundo_apellido=$_POST['txtSegundoApellido'];
		$tec_numero_telefono=$_POST['txtTelefono'];
		$tec_numero_movil=$_POST['txtNumeroMovil'];
		$tec_correo=$_POST['txtMovil'];
		$tec_especialidad=$POST['cboEspecialidad'];

        $tecnicos->modificar($tec_codigo,$tec_pimer_nombre,$tec_segundo_nombre,$tec_primer_apellido,$tec_segundo_apellido,$tec_numero_telefono,$tec_numero_movil,$tec_correo,$tec_especialidad);
}
break;

     case('consultar');
     {
        $tec_codigo=$_POST['txtCodigoTecnico'];
        
         $tecnicos->consultar($tec_codigo);
     }

     break;

     case ('eliminar');
     {
        $tec_codigo=$_POST['txtCodigoTecnico'];
        $tecnicos->eliminar($tec_codigo);
     }

     break;
 }  

 class tecnicos_controller {
    
      public function guardar($tec_codigo,$tec_pimer_nombre,$tec_segundo_nombre,$tec_primer_apellido,$tec_segundo_apellido,$tec_numero_telefono,$tec_numero_movil,$tec_correo,$tec_especialidad);
    {
        $guar=new tecnicos_class();
        $guar->guardar($tec_codigo,$tec_pimer_nombre,$tec_segundo_nombre,$tec_primer_apellido,$tec_segundo_apellido,$tec_numero_telefono,$tec_numero_movil,$tec_correo,$tec_especialidad);
    }
    
      public function modificar($tec_codigo,$tec_pimer_nombre,$tec_segundo_nombre,$tec_primer_apellido,$tec_segundo_apellido,$tec_numero_telefono,$tec_numero_movil,$tec_correo,$tec_especialidad);
    {
        $modi=new tecnicos_class();
        $modi->modificar($tec_codigo,$tec_pimer_nombre,$tec_segundo_nombre,$tec_primer_apellido,$tec_segundo_apellido,$tec_numero_telefono,$tec_numero_movil,$tec_correo,$tec_especialidad);
    }
       public function consultar($tec_codigo)
    {
        $cons=new tecnicos_class();
        $cons->consultar($tec_codigo);
    }
     public function eliminar($tec_codigo)
    {
        $cons=new tecnicos_class();
        $cons->eliminar($tec_codigo);
    }
 }