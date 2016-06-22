<?php
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

?>
