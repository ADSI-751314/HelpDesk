<?php


include "../../HelpDesk/model/garantias_class1.php";



$garantias = new garantias_class1();

//Validamos la opcion que nos mande nuestro metodo ajax y asi ingresar al proceso que nos indique
if (isset($_GET['op'])) {
    $op = $_GET['op'];
}

if ($op == 1) {
    $garantias->consultar();//nos envia a la funcion consultar de la clase garantias_class1
}

else if ($op == 2) {
            $codigo = $_POST['codigo'];
            $tipo = $_POST['tipo'];
            $FechaInicio = $_POST['FechaInicio'];
            $FechaFin = $_POST['FechaFin'];
            $descripcion = $_POST['descripcion'];
            $tipoEquipo = $_POST['tipoEquipo'];

                //nos envia a la funcion guardar de la clase garantias_class1
            $garantias->guardar($codigo, $tipo, $FechaInicio, $FechaFin, $descripcion, $tipoEquipo);

           
}
if ($op==3)
{
     $codigo = $_POST['codigo'];
        //nos envia a la funcion eliminar de la clase garantias_class1
            $garantias->eliminar($codigo);
            
}


if($op==7){
   
           
            $codigo = $_POST['codigo'];
            $tipo = $_POST['tipo'];
            $FechaInicio = $_POST['FechaInicio'];
            $FechaFin = $_POST['FechaFin'];
            $descripcion = $_POST['descripcion'];
            $tipoEquipo = $_POST['tipoEquipo'];
                //nos envia a la funcion modificar de la clase garantias_class1
            $garantias->modificar($codigo, $tipo, $FechaInicio, $FechaFin, $descripcion, $tipoEquipo);
                
       
}


if($op==8){
   
 $pk_gar_codigo = $_POST['codigo'];
//nos envia a la funcion cargarModificar de la clase garantias_class1 que nos sirve para llenar el formulario para posteriormente modificar la informacion
    $garantias->garantiasModificar($pk_gar_codigo);
    
}
?>