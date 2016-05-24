<?php
include '../../HelpDesk/model/partes_class.php';



$partes = new partes_class();

if (isset($_GET['op']))
{
    $op=$_GET['op'];
}

IF($op == 0) {$partes->cargarAgregar();}
      
        
        
IF($op == 1)
        {
        
                $pte_codigo ="";
                $pte_seria=$_POST['txtSerial'];
                $pte_marca=$_POST['txtMarca'];
                $pte_descripcion=$_POST['txtDescripcion'];
                $pte_Estado=$_POST['txtEstado'];
                $fk_equi_codigo=$_POST['txtFk_equipo'];
                $fk_htc_codigo=$_POST['txtSerial'];
        

        $partes->guardar( $pte_codigo,$pte_seria, $pte_marca, $pte_descripcion, $pte_Estado, $fk_equi_codigo, $fk_htc_codigo);}


   

   
