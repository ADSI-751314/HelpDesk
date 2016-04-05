<?php

include_once '../../HelpDesk/model/conexion_class.php';

class politicas_class 
    {

    
    
    private $conexion; 
    public function __construct()
    {
        $this->conexion = new conexion_class();
        $this->conexion->conexion();
        
  }
    public function guardar($pol_codigo,$pol_descripcion)
    {
       $sql= " insert into politicas values ('$pol_codigo','$pol_descripcion')";
        
        
        $query = $this->conexion->ejecutarQuery($sql);
    }
    
     public function modificar($pol_codigo,$pol_descripcion)
    {
       $sql= " 'UPDATE politicas SET pol_codigo='" . $pol_codigo . "'pol_descripcion'" . $pol_descripcion . "'";
        
        
        $query = $this->conexion->ejecutarQuery($sql);
    }
    
    public function consultar($pol_codigo)
    {
        //cnx bd
        //consulta bd
        
        $consulta_cliente = "select pk_pol_codigo,pol_descripcion";
        
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
        public function eliminar($pol_codigo) 
        {
        $sql = " DELETE FROM politicas where pk_pol_codigo=" . $pol_codigo . "";


        $query = $this->conexion->ejecutarQuery($sql);
        }
    }
  