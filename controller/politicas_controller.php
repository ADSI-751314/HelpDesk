<?php

include '/HelpDesk/model/politicas_class.php';

$politicas = new politicas_class();


$proceso = $_REQUEST ['petition'];
 
switch($proceso)
 {
     
     case('guardar');
     {
         echo
         
        $pol_codigo=$_POST['txtCodigo'];
        $pol_descripcion=$_POST['txtDescripcion'];
             
        $politicas->guardar($pol_codigo,$pol_descripcion);
                 
            break;     
                 
     } 
  
     case('consultar');
     {
        $pol_codigo=$_POST['txtCodigo'];
        $pol_descripcion=$_POST['txtDescripcion'];
        
       
     $politicas->consultar($pol_codigo,$pol_descripcion);
         
         
     }
 }  
?>
