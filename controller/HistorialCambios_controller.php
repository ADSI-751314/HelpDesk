<?php

include "../../HelpDesk/model/HistorialCambios_class.php";


    
$historial = new HistorialCambios_class();

    if (isset($_GET['op']))
        {
            $op= $_GET['op'];
        }



if ($op == 1)
{
$PkHtcCodigo = $_POST['pkCodigo'];
$htcFecha = $_POST['fecha'];
$htcHora = $_POST['hora'];
$htcDescripcion = $_POST['txtdescripcion'];


   $historial->guardar($PkHtcCodigo, $htcFecha, $htcHora, $htcDescripcion); 
    
}
//condicion que permite consultar la peticion realizada desde el cliente al servidor
if ($op == 2){
    
    $historial->consultar();
    
}
//condicion que permite enviar la consulta por codigo o fecha al servidor
if ($op ==3){
    
   $PkHtCodigo = $_POST['pkCodigo'];
   $htcFecha = $_POST['fecha'];
   $htcHora = $_POST['hora'];
   $htcDescripcion = $_POST['txtdescripcion'];
  
   $historial->consultaFiltro($PkHtCodigo, $htcFecha,$htcHora,$htcDescripcion);

}

if($op ==4){
    
    
      $historial->ConsultarModificar();
    
}

if ($op==5){
    
$PkHtcCodigo = $_POST['pkCodigo'];
$htcFecha = $_POST['fecha'];
$htcHora = $_POST['hora'];
$htcDescripcion = $_POST['txtdescripcion'];
$historial->modificar($PkHtcCodigo, $htcFecha, $htcHora, $htcDescripcion);
    
}

if($op ==6){
    
   $PkHtcCodigo = $_POST['pkCodigo']; 
    $historial->ModalMoficar($PkHtcCodigo);
}

if($op == 7){   
    $historial->ConsultarEliminar();
    
    
}

if ($op == 8){
     $PkHtcCodigo = $_POST['pkCodigo'];
     
     

          $historial->eliminar($PkHtcCodigo);
        
   
}

if ($op ==9){
    
   $PkHtCodigo = $_POST['pkCodigo'];
   $htcFecha = $_POST['fecha'];
 
  
   $historial->consultaFiltroEliminarModificarCrear($PkHtCodigo, $htcFecha);

}

?>

