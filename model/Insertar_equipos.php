<?php
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

?>
