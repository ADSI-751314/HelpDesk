<?php

  if (isset($_GET['op']))
        {
            $op= $_GET['op'];
        }
if($op == 0){
    
  $codigo = $_POST['codigo'];
require('Conexion_equ.php');
$con = Conectar();
$sql = 'DELETE FROM equipos WHERE pk_equ_codigo=:codigo';
$q = $con->prepare($sql);
$q->execute(array(':codigo'=>$codigo));  
    
    
}
if($op == 1){
    
   $codigo = $_POST['codigo'];
$nombres = $_POST['nombres'];
$precio = $_POST['precio'];
$dependencia = $_POST['dependencia'];
$tipoEquipo = $_POST['tipoEquipo'];
require('Conexion_equ.php');
$con = Conectar();
$sql = 'INSERT INTO equipos(pk_equ_codigo,equ_nombre,equ_precio,fk_dep_codigo,fk_tip_codigo) VALUES (:codigo,:nombres,:precio,:dependencia,:tipoEquipo)';
$q = $con->prepare($sql);
$q->execute(array(':codigo'=>$codigo,':nombres'=>$nombres,':precio'=>$precio,':dependencia'=>$dependencia,'tipoEquipo'=>$tipoEquipo));
 
    
}

if($op == 2){
    
    $codigo = $_POST['codigo'];
$nombres = $_POST['nombres'];
$precio = $_POST['precio'];
$dependencia = $_POST['dependencia'];
$tipoEquipo = $_POST['tipoEquipo'];
require('Conexion_equ.php');
$con = Conectar();
$sql = 'UPDATE equipos SET equ_nombre=:nombres, equ_precio=:precio, fk_dep_codigo=:dependencia, fk_tip_codigo=:tipoEquipo WHERE pk_equ_codigo=:codigo';
$q = $con->prepare($sql);
$q->execute(array(':codigo'=>$codigo,':nombres'=>$nombres,':precio'=>$precio,':dependencia'=>$dependencia,'tipoEquipo'=>$tipoEquipo));

    
}



//if ($q == 1){
//    
//    alert("Registro eliminado");
//    
//}

?>
