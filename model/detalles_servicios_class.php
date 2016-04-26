<?php

include '../../HelpDesk/model/conexion_class.php';

class detalles_servicios_class 
{

   
   
   private $conexion; 
   public function __construct()
   {
       $this->conexion=new conexion_class();
       $this->conexion->conexion();
       
 }
   public function guardar($det_codigo,$det_fecha,$det_descripcion)
   {
      $sql= " insert into detalles_servicios values ($det_codigo,$det_fecha,$det_descripcion)";
       
       
       $query = $this->conexion->ejecutarQuery($sql);
   }
   
    public function modificar($det_codigo,$det_fecha,$det_descripcion)
   {
       $sql= "UPDATE detales_servicios SET det_descripcion = '".$det_descripcion."' where pk_det_codigo = '".$det_codigo."'";
       
       $query = $this->conexion->ejecutarQuery($sql);
   }
   
   public function consultar($det_codigo)
   {
       //cnx bd
       //consulta bd
       
       $consulta_cliente = "select pk_det_codigo, det_fecha, det_descripcion";
       
       $fuente_cliente = $this->conexion->ejecutarQuery($consulta_cliente);
       
       $cantidad_cliente = mysql_num_rows($fuente_cliente);
       
       for ($i = 0; $i < $cantidad_cliente; $i++)
       {
           $registro_cliente = mysql_fetch_row($fuente_cliente);

           $contenido = "<tr>
<td> " . $registro_cliente[0] . " </td>
<td> " . $registro_cliente[1] . " </td>
<td> " . $registro_cliente[2] . " </td>
<td> " . $registro_cliente[3] . " </td>
<td> " . $registro_cliente[4] . " </td>
                                                       <td> " . $registro_cliente[5] . " </td>

</tr>";

           echo $contenido;
       }
   }
       public function eliminar($det_codigo) 
       {
       $sql = " DELETE FROM detalles_servicios where pk_det_codigo=" . $det_codigo . "";


       $query = $this->conexion->ejecutarQuery($sql);
       }
   }
