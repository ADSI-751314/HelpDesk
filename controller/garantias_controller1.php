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
if ($op==3)
{
     $codigo = $_POST['codigo'];
            $garantias->eliminar($codigo);
            
}



if($op==6){
     $pro_codigo = $_POST['txtPro_parametro'];
    
    $provedores->cargarModificar($pro_codigo);
    echo "";
}

if($op==7){
   
    echo "entraste";        
            $codigo = $_POST['codigo'];
            $tipo = $_POST['tipo'];
            $FechaInicio = $_POST['FechaInicio'];
            $FechaFin = $_POST['FechaFin'];
            $descripcion = $_POST['descripcion'];
            $tipoEquipo = $_POST['tipoEquipo'];

            $garantias->modificar($codigo, $tipo, $FechaInicio, $FechaFin, $descripcion, $tipoEquipo);
                
       
}


if($op==8){
   
 $pk_gar_codigo = $_POST['codigo'];
    $garantias->garantiasModificar($pk_gar_codigo);
    
}
?>