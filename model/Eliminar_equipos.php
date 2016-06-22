<?php
$codigo = $_POST['codigo'];
require('Conexion_equ.php');
$con = Conectar();
$sql = 'DELETE FROM equipos WHERE pk_equ_codigo=:codigo';
$q = $con->prepare($sql);
$q->execute(array(':codigo'=>$codigo));

//if ($q == 1){
//    
//    alert("Registro eliminado");
//    
//}

?>
